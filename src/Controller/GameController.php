<?php

namespace App\Controller;

use App\Entity\Combat;
use App\Repository\CombatRepository;

use App\Service\UserFunction;
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
        $game->setCountBateauJ2(2);
        $game->setHpJ1([100]);
        $game->setHpJ2([100,100]);

        $firstLog = date('H:i:s').' : Début de la partie !,';
        $game->setLogs($firstLog);


        $game->setStatut(1);

        $game->setTimestamp($now);

        $manager->persist($game);
        $manager->flush();

        $id = $game->getId();
        //$this->redirect('fight', ['id' => $id]);

        return $this->redirectToRoute('fight', ['id' => $id]);
    }

    /**
     * @Route("/game/{id}", name="fight")
     */
    public function fight(Combat $game, UserFunction $userFunction)
    {
        $logs = $userFunction->showLogs($game->getLogs());
        
        $hpJ2 = $game->getHpJ2();
        if($hpJ2[0] == 0 && $hpJ2[1] == 0) {
            $userFunction->finish($game);
        }

        return $this->render('game/fight.html.twig', [
            'game' => $game,
            'logs' => $logs
        ]);
    }

    /**
     * @Route("/game/{id}/attaque/{target}", name="attack")
     */
    public function attaque(Combat $game, $target, UserFunction $userFunction, ObjectManager $manager)
    {
        $game->setLogs($game->getLogs().$userFunction->attack($game,$target));
        $manager->persist($game);
        $manager->flush();

        return $this->redirectToRoute('fight', ['id' => $game->getId()]);
    }
}
