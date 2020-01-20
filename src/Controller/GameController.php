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
     * @Route("game/create_team", name="team")
     */
    public function team()
    {   
        return $this->render('game/create_team.html.twig', [
            
        ]);
    }

    /**
     * @Route("/game/start/{data}", name="start")
     */
    public function start(ObjectManager $manager,$data, GameFunctions $gameFunctions) 
    {
        if($data == 'random') {
            $data = $gameFunctions->randomTeam();
        }
        $data = explode(',',$data);

        if(is_int($data[1]) && is_int($data[3]) && is_int($data[5]) && is_string($data[0]) && is_string($data[2]) && is_string($data[4])) {
            return $this->redirectToRoute('team');
        }

        

        if(($data[1] + $data[3] + $data[5]) > 5) {
            return $this->redirectToRoute('team');
        }
        
        $data_adversaire = $gameFunctions->randomTeam();
        $data_adversaire = explode(',',$data_adversaire);

        //varDumper::dump($data);
        //varDumper::dump($data_adversaire);
        //exit();

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
            $boat->setAttack(10 * $data[($i*2)+1]);
            $boat->setDefense(7 * $data[($i*2)+1]);
            $boat->setType($data[($i*2)]);
            $boat->setTier($data[($i*2)+1]);
            $boat->setHasAttacked(FALSE);
            

            $manager->persist($boat);
        }

        for($i = 0 ; $i < $game->getCountBateauJ2() ; $i++) {
            $boat = new Boat();

            $boat->setIdUser(0);
            $boat->setIdCombat($game->getId());

            $boat->setHp(100);
            $boat->setAttack(10 * $data_adversaire[($i*2)+1]);
            $boat->setDefense(7 * $data_adversaire[($i*2)+1]);
            $boat->setType($data_adversaire[($i*2)]);
            $boat->setTier($data_adversaire[($i*2)+1]);
            $boat->setHasAttacked(FALSE);

            $manager->persist($boat);
        }
        $manager->flush();

        $id = $game->getId();

        return $this->redirectToRoute('fight', ['id' => $id]);
    }

    /**
     * @Route("/logs/{id}", name="logs")
     */
    public function logs(Combat $game)
    {
        $logs = explode(',',$game->getLogs());
        return $this->render('game/logs.html.twig', [
            'game' => $game,
            'logs' => $logs
        ]);
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
                    $game->setLogs($game->getLogs().'Tour du joueur,');

                    $manager->persist($game);
                    $manager->flush();
                    $gameFunctions->resetBoat($game,$boatRepository,$manager);
                    /*for($i = 0; $i < count($boatsJ1) ; $i++) {
                        //Les bateaux allié peuvent à nouveau attaquer
                        $boatsJ1[$i]->setHasAttacked(FALSE);
                        $manager->persist($boatsJ1[$i]);
                        $manager->flush();
                    }*/
                }
            }
            else if($game->getTurn() == 1) {
                //Si c'est le tour du joueur,
                if($gameFunctions->turn($boatsJ1) == FALSE ) {
                    //Si plus aucun bateau ne peut attaquer, on passe le tour à l'adversaire
                    $game->setTurn(0);
                    $game->setLogs($game->getLogs()."Tour de l'adversaire,");
                    $manager->persist($game);
                    $manager->flush();
                    $gameFunctions->resetBoat($game,$boatRepository,$manager);
                    /*for($i = 0; $i < count($boatsJ2) ; $i++) {
                        //Les bateaux adverses peuvent à nouveau attaquer
                        $boatsJ2[$i]->setHasAttacked(FALSE);
                        $manager->persist($boatsJ2[$i]);
                        $manager->flush();ss
                    }*/
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
        //Sécurité
        if($game->getJoueur1() != $this->getUser()->getPseudo() && $game->getJoueur2() != $this->getUser()->getPseudo()) {
            return $this->redirectToRoute('game');
        }
    
        //Lancement de l'attaque
        $gameFunctions->attack($game,$attacker,$target,'attack');
        $manager->persist($attacker);
        $manager->persist($target);
        $manager->persist($game);
        
        $manager->flush();

        //Contre attaque ? Si le bateau n'est pas détruit
        if($target->getHp() > 0) {
            $counterattackChance = $target->getTier() * 10;
            if(random_int(1,100) >= 100 - $counterattackChance && $target->getHasAttacked() == 0) {
                $gameFunctions->attack($game,$target,$attacker,'counterattack');

                $manager->persist($attacker);
                $manager->persist($target);
                $manager->persist($game);
                
                $manager->flush();
            }
        }       

        //varDumper::dump($attacker);
        //varDumper::dump($target);
        //varDumper::dump($game);

        //exit;

        return $this->redirectToRoute('fight', ['id' => $game->getId()]);
    }
}
