<?php

namespace App\Service;

use App\Entity\Combat;
use App\Repository\CombatRepository;

use App\Entity\Boat;
use App\Repository\BoatRepository;

use Doctrine\Common\Persistence\ObjectManager;

use Symfony\Component\VarDumper\VarDumper;

class GameFunctions
{
    public function randomTeam()
    {
        $first = rand(1,3);
        if($first == 3) {
            $second = 1;
            $third = 1;
        }
        else if($first == 2) {
            $second = rand(1,2);
            if($second == 2) {
                $third = 1;
            }
            else if($second == 1) {
                $third = 2;
            }
        }
        else if($first == 1) {
            $second = rand(1,3);
            if($second == 3) {
                $third = 1;
            }
            else if($second == 2) {
                $third = 2;
            }
            else {
                $third = 3;
            }
        }

        $types = ['basique','corsaire','fregate','galion'];

        $first_type = $types[array_rand($types)];
        $second_type = $types[array_rand($types)];
        $third_type = $types[array_rand($types)];

        /*set_time_limit(10);

        $number_of_groups   = 3;
        $sum_to             = 5;

        $groups             = array();
        $group              = 0;

        while(array_sum($groups) != $sum_to)
        {
            $groups[$group] = mt_rand(1,3);

            if(++$group == $number_of_groups)
            {
                $group  = 0;
            }
        }*/
        $groups = $first_type.','.(int)$first.','.$second_type.','.(int)$second.','.$third_type.','.(int)$third;
        return $groups;
    }




    //Fonction séparer les logs dans un tableau et les rendre affichables
    public function showLogs($logs) {
        $logs_html = explode(',',$logs);
        return $logs_html;
    }

    //Fonction d'attaque et de contre-attaque
    /**
     * Nécessite un objet Combat $game, un objet Boat $attacker et un objet Boat $target
     * 
     * Calcul les points de dégats que l'attaquant inflige à sa cible et fait évoluer le jeu en conséquence
     * Ajoute l'action d'attaque au logs de la partie en fonction du tour et du résultat de l'attaque
     * Ajuste le nombre de bateau restant au joueur concerné si un de ses bateaux et détruit pendant l'attaque
     * 
     * @param Combat $game
     * @param Boat $attacker
     * @param Boat $target
     * @param $type
     * @return array
     */
    public function attack(Combat $game,Boat $attacker,Boat $target,$type) 
    {
        //Tranche aléatoire pour définir l'attaque et la défense
        $att = rand ($attacker->getAttack() - 5 , $attacker->getAttack() + 5);
        $def = rand ($target->getDefense() - 2 , $target->getDefense() + 2);

        // 5% de chance d'esquive par niveau
        $esquiveChance = $target->getTier() * 5;

        //Tirage d'esquive
        $esquive = rand(1,100);

        //Si esquive réussie
        if($esquive <= $esquiveChance) {
            //Aucun dégat + marque d'esquive
            $esquive = TRUE;
            $remarque = ' [ ESQUIVE ! ] ';
            $coupCritique = '';
            $damage = 0;
        }
        else {
            //Sinon calcul des dégats
            $esquive = FALSE;
            $remarque = '';

            // 2% de chance de coup critique
            $critiqueChance = $target->getTier() * 2;

            //Tirage de coup critique
            $critique = rand(1,100);

            //Système d'efficacité (multiplication des points d'attaque) en fonction du type de bateau
            $coef = $this->efficency($attacker->getType(),$target->getType());
            $att = round($att * $coef);

            if($critique <= $critiqueChance && $type == "attack") {
                //Coup critique : Dégats * 2
                $att *= 2;
                $coupCritique = " Coup critique ! ";
            }
            else {
                $coupCritique = '';
            }

            //Calcul des dégats
            $damage = $att - $def;

            //Eviter les dégats négatifs
            if($damage <= 0) {
                $damage = 0;
            }
        }

        //Soustraction des HP
        $hp = $target->getHp();
        $hp -= $damage;

        //Eviter les HP négatifs
        if($hp <= 0) {
            $hp = 0;
        }
        //Redéfinition des HP de la cible
        $target->setHp($hp);
        
        //Création de la ligne de log (Informations misent bout à bout)
        $newLog = "";

        //Si tour adverse
        if($game->getTurn() == 0) {
            //C'est l'adversaire qui joue et le joueur qui peut contre attaquer
            $tour = 'IA : ';
            $tourContreAttaque = 'Joueur : ';
            if($hp == 0) {
                if($type == "counterattack") {
                    //Si contre attaque, un bateau adverse a été détruit
                    $game->setCountBateauJ2($game->getCountBateauJ2() - 1);
                }
                else if($type == "attack") {
                    //Si attaque, un bateau du joueur a été détruit
                    $game->setCountBateauJ1($game->getCountBateauJ1() - 1);
                }
                //Signaler destruction
                $detruit = '⟶ Cible détruite !';
            }
            else {
                $detruit = '';
            }
        }
        //Si tour du joueur
        else if($game->getTurn() == 1) {
            //C'est le joueur qui joue et l'adversaire qui peut contre attaquer
            $tour = 'Joueur : ';
            $tourContreAttaque = 'IA : ';

            //Si HP de la cible à 0
            if($hp == 0) {
                if($type == "counterattack") {
                    //Si contre attaque, un bateau du joueur a été détruit
                    $game->setCountBateauJ1($game->getCountBateauJ1() - 1);
                }
                else if($type == "attack") {
                    //Si attaque, un bateau adverse a été détruit
                    $game->setCountBateauJ2($game->getCountBateauJ2() - 1);    
                }
                //Signaler destruction
                $detruit = '⟶ Cible détruite !';
            }
            else {
                $detruit = '';
            }
        }

        if($type == "attack") {
            $action = 'Attaque ';
        }
        else if($type == "counterattack") {
            //Contre attaque, le joueur qui ne joue pas attaque
            $action = 'Contre attaque ';
            $tour = $tourContreAttaque;
        }

        //Quel bateau de quel niveau attaque quel attaque de quel niveau ?
        $attaque = 'du bateau de type '.$attacker->getType().' T'.$attacker->getTier().' contre le bateau de type '.$target->getType().' T'.$target->getTier();

        //L'orthographe c'est important
        if($damage == 1) {
            $degats = ' 1 point de dégât ';
        }
        else {
            $degats = ' '.$damage.' points de dégâts ';
        }

        if(!$esquive) {
            //Signaler efficacité de l'attaque ou non
            if($coef == 0.75) {
                $remarque = ' [ INEFFICACE ] ';
            }
            else if($coef == 1.25) {
                $remarque = ' [ EFFICACE ] ';
            }
        }

        //Log : Qui joue ? Attaque ou contre attaque ? Avec quoi, contre quoi ? Combien de dégats ? Coup Critique ? Pourquoi ? Cible détruite ?
        $newLog = $tour.$action.$attaque.' ⟶ '.$degats.$remarque.$coupCritique.$detruit.',';
        $game->setLogs($game->getLogs().$newLog);

        //L'attaquant ou contre attaquant ne peut pas de nouveau attaquer dans ce tour
        $attacker->setHasAttacked(true);

        return [$game,$attacker,$target];
    }

    public function turn($boats) {
        //On examine les bateau de celui qui joue
        for($i = 0 ; $i < count($boats) ; $i++) {
            //S'il reste un bateau qui n'a pas attaqué, le joueur peut continuer à jouer
            if($boats[$i]->getHasAttacked() == FALSE && $boats[$i]->getHp() > 0) {
                return TRUE;
            }
        }
        //Sinon le tour peut être passé
        return FALSE;
    }

    public function resetBoat($game, BoatRepository $boatRepository, ObjectManager $manager) {
        $boats = $boatRepository->getBoats($game);
        for($i = 0; $i < count($boats) ; $i++) {
            //Tout les bateaux peuvent à nouveau attaquer
            $boats[$i]->setHasAttacked(FALSE);
            $manager->persist($boats[$i]);
            $manager->flush();
        }
    }

    public function finish($game,$user) {
        //Statut = 2 : La partie est terminée
        $game->setStatus(2);

        //Si tous les bateaux adverses sont détruits
        if($game->getCountBateauJ2() == 0) {
            //Le joueur gagne et augmente son nombre de victoire
            $game->setVainqueur($game->getJoueur1());
            $user->setCountVictory($user->getCountVictory() + 1);
        }
        //Si tous les bateaux alliés sont détruits
        else {
            //L'adversaire gagne
            $game->setVainqueur($game->getJoueur2());
        }
        return $game;
    }

    public function efficency(string $attacker,string $target) {
        switch($attacker) {
            //Corsaire : Efficace contre les frégates mais pas contre les galion
            case 'corsaire' :
                switch($target) {
                    case 'fregate':
                        return 1.25;
                        break;
                    case 'galion':
                        return 0.75;
                        break;
                    default :
                        return 1;
                        break;
                }
                break;
            
            //Frégate : Efficace contre les galions mais pas contre les corsaires
            case 'fregate' :
                switch($target) {
                    case 'galion':
                        return 1.25;
                        break;
                    case 'corsaire':
                        return 0.75;
                        break;
                    default :
                        return 1;
                        break;
                }
                break;

            //Galion : Efficace contre les corsaires mais pas contre les frégates
            case 'galion' :
                switch($target) {
                    case 'corsaire':
                        return 1.25;
                        break;
                    case 'fregate':
                        return 0.75;
                        break;
                    default :
                        return 1;
                        break;
                }
                break;

            default :
                return 1;
                break;
        }
    }

    public function logsIcons($log) {
        $classLi = '';
        $classP = '';

        return [$classLi,$classP];
    }
}

?>