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

use Symfony\Component\VarDumper\VarDumper;


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
        $user = $this->getUser();

        //Création de la partie
        $game = new Combat();
        $game->setJoueur1($user->getPseudo());
        $game->setJoueur2('IA');
        $game->setCountBateauJ1(3);
        $game->setCountBateauJ2(3);
        $game->setTurn(rand(0,1));

        $firstLog = date('H:i:s').' : Début de la partie ! ';
        if($game->getTurn() == 0) {
            $firstLog = $firstLog."L'adversaire commence,";
        }
        else {
            $firstLog = $firstLog."Vous commencez,";
        }
        $game->setLogs($firstLog);

        //Statut = 1 : La partie est en cours
        $game->setStatus(1);

        $game->setTimestamp($now);

        $user->setCountCombat($user->getCountCombat() + 1);
        $manager->persist($game);
        $manager->flush();

        for($i = 0 ; $i < $game->getCountBateauJ1() ; $i++) {
            $boat = new Boat();

            $boat->setIdUser($this->getUser()->getId());
            $boat->setIdCombat($game->getId());

            $boat->setHp(100);
            $boat->setAttack(20);
            $boat->setDefense(10);
            $boat->setType('basique');
            $boat->setTier(1);
            $boat->setHasAttacked(FALSE);
            

            $manager->persist($boat);
        }

        for($i = 0 ; $i < $game->getCountBateauJ2() ; $i++) {
            $boat = new Boat();

            $boat->setIdUser(0);
            $boat->setIdCombat($game->getId());

            $boat->setHp(100);
            $boat->setAttack(20);
            $boat->setDefense(10);
            $boat->setType('basique');
            $boat->setTier(1);
            $boat->setHasAttacked(FALSE);

            $manager->persist($boat);
        }
        $manager->flush();

        $id = $game->getId();

        return $this->redirectToRoute('fight', ['id' => $id]);
    }

    /**
     * @Route("/game/{id}", name="fight")
     */
    public function fight(Combat $game, UserFunction $userFunction, GameFunctions $gameFunctions, BoatRepository $boatRepository, ObjectManager $manager)
    {
        //Seul les joueurs concernées peuvent accèder à la partie et à son résultat
        if($game->getJoueur1() != $this->getUser()->getPseudo() && $game->getJoueur2() != $this->getUser()->getPseudo()) {
            return $this->redirectToRoute('game');
        }

        //Si la partie est déjà terminée, on redirige vers l'écran de fin de partie
        if($game->getStatus() == 2) {
            return $this->render('game/end.html.twig', [
                'game' => $game,
                'winner' => $game->getVainqueur()
            ]);
        }

        //On affecte les bateaux à chaque joueur
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

        //On vérifie si la partie peut continuer (S'il reste au moins en bateau vivant de chaque côté)
        if($game->getCountBateauJ1() == 0 || $game->getCountBateauJ2() == 0) {
            //Si ce n'est pas le cas, la partie est terminé
            $gameFunctions->finish($game,$this->getUser());
            $manager->persist($game);
            $manager->flush();

            return $this->render('game/end.html.twig', [
                'game' => $game,
            ]);
        }
        else {
            //Sinon on vérifie le tour
            if($game->getTurn() == 0) {
                //Si c'est le tour de l'adversaire
                if($gameFunctions->turn($boatsJ2) == FALSE) {
                    //Si plus aucun bateau ne peut attaquer, on passe le tour au joueur
                    $game->setTurn(1);
                    $manager->persist($game);
                    $manager->flush();
                    for($i = 0; $i < count($boatsJ1) ; $i++) {
                        //Les bateaux allié peuvent à nouveau attaquer
                        $boatsJ1[$i]->setHasAttacked(FALSE);
                        $manager->persist($boatsJ1[$i]);
                        $manager->flush();
                    }
                }
            }
            else if($game->getTurn() == 1) {
                //Si c'est le tour du joueur,
                if($gameFunctions->turn($boatsJ1) == FALSE ) {
                    //Si plus aucun bateau ne peut attaquer, on passe le tour à l'adversaire
                    $game->setTurn(0);
                    $manager->persist($game);
                    $manager->flush();
                    for($i = 0; $i < count($boatsJ2) ; $i++) {
                        //Les bateaux adverses peuvent à nouveau attaquer
                        $boatsJ2[$i]->setHasAttacked(FALSE);
                        $manager->persist($boatsJ2[$i]);
                        $manager->flush();
                    }
                }
            }

            //On convertis les phrases de log mises bout à bout en tableau
            $logs = $gameFunctions->showLogs($game->getLogs());

            //On affiche le jeu
            return $this->render('game/fight.html.twig', [
                'game' => $game,
                'boatsJ1' => $boatsJ1,
                'boatsJ2' => $boatsJ2,
                'logs' => $logs
            ]);
        }   
    }

    /**
     * @Route("/game/{id}/attaque/{target}/by/{attacker}", name="attack")
     */
    public function attaque(Combat $game, Boat $target, Boat $attacker, GameFunctions $gameFunctions, ObjectManager $manager)
    {
        if($game->getJoueur1() != $this->getUser()->getPseudo() && $game->getJoueur2() != $this->getUser()->getPseudo()) {
            return $this->redirectToRoute('game');
        }
    
        //$attack_data = 
        $gameFunctions->attack($game,$attacker,$target);

        $manager->persist($attacker);
        $manager->persist($target);
        $manager->persist($game);
        
        $manager->flush();

        //varDumper::dump($attacker);
        //varDumper::dump($target);
        //varDumper::dump($game);

        //exit;

        return $this->redirectToRoute('fight', ['id' => $game->getId()]);
    }
}
