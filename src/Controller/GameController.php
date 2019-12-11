<?php

namespace App\Controller;

use App\Entity\Combat;
use App\Repository\CombatRepository;

use App\Entity\Boat;
use App\Repository\BoatRepository;

use App\Service\UserFunction;
use App\Service\GameFunctions;
use Doctrine\Common\Persistence\ObjectManager;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class GameController extends AbstractController
{
    /**
     * @Route("/game", name="game")
     */
    public function index()
    {
        $statut = $this->getUser()->getPseudo();
        
        return $this->render('game/index.html.twig', [
            'game_status' => $statut,
        ]);
    }

    

    /**
     * @Route("/game/start", name="start")
     */
    public function start(ObjectManager $manager) 
    {
        $now = date_create(date('H:i:s'));

        $game = new Combat();
        $game->setJoueur1($this->getUser()->getPseudo());
        $game->setJoueur2('IA');
        $game->setCountBateauJ1(1);
        $game->setCountBateauJ2(3);

        $firstLog = date('H:i:s').' : Début de la partie !,';
        $game->setLogs($firstLog);


        $game->setStatus(1);

        $game->setTimestamp($now);

        $manager->persist($game);
        $manager->flush();

        for($i = 0 ; $i < $game->getCountBateauJ1() ; $i++) {
            $boat = new Boat();

            $boat->setIdUser($this->getUser()->getId());
            $boat->setIdCombat($game->getId());

            $boat->setHp(100);
            $boat->setAttack(20);
            $boat->setDefense(10);
            $boat->setType('base');

            $manager->persist($boat);
        }

        for($i = 0 ; $i < $game->getCountBateauJ2() ; $i++) {
            $boat = new Boat();

            $boat->setIdUser(0);
            $boat->setIdCombat($game->getId());

            $boat->setHp(100);
            $boat->setAttack(20);
            $boat->setDefense(10);
            $boat->setType('base');

            $manager->persist($boat);
        }
        $manager->flush();

        $id = $game->getId();

        return $this->redirectToRoute('fight', ['id' => $id]);
    }

    /**
     * @Route("/game/{id}", name="fight")
     */
    public function fight(Combat $game, UserFunction $userFunction, GameFunctions $gameFunctions, BoatRepository $boatRepository)
    {
        $boats = $boatRepository->getBoats($game);
        $boatsJ1 = [];
        $boatsJ2 = [];

        for($i = 0 ; $i < count($boats) ; $i++) {
            if($boats[$i]->getIdUser() == $this->getUser()->getId()) {
                array_push($boatsJ1,$boats[$i]);
            }
            else {
                array_push($boatsJ2,$boats[$i]);
            }
        }

        $logs = $gameFunctions->showLogs($game->getLogs());

        if($game->getCountBateauJ1() == 0 || $game->getCountBateauJ2() == 0) {
            $gameFunctions->finish($game);
            return $this->render('game/end.html.twig', [
                'game' => $game,
            ]);

        }

        return $this->render('game/fight.html.twig', [
            'game' => $game,
            'boatsJ1' => $boatsJ1,
            'boatsJ2' => $boatsJ2,
            'logs' => $logs
        ]);
    }

    /**
     * @Route("/game/{id}/attaque/{target}", name="attack")
     */
    public function attaque(Combat $game, Boat $target, GameFunctions $gameFunctions, ObjectManager $manager)
    {
        dump($target);
        $game->setLogs($game->getLogs().$gameFunctions->attack($game,$target));
        $manager->persist($game);
        $manager->persist($target);
        $manager->flush();

        return $this->redirectToRoute('fight', ['id' => $game->getId()]);
    }
}
