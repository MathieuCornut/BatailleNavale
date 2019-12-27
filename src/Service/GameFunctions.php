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
    public function showLogs($logs) {
        $logs_html = explode(',',$logs);
        return $logs_html;
    }

    public function attack(Combat $game,Boat $attacker,Boat $target) 
    {
        //Tranche aléatoire pour définir l'attaque et la défense
        $att = rand ($attacker->getAttack() - 5 , $attacker->getAttack() + 5);
        $def = rand ($target->getDefense() - 2 , $target->getDefense() + 2);

        //Eviter les dégats négatifs
        $damage = $att - $def;
        if($damage <= 0) {
            $damage = 0;
        }

        //Soustraction des HP
        $hp = $target->getHp();
        $hp -= $damage;
        
        //On vérifie si le bateau est mort
        if($hp < 0) {
            //On évite les HP négatifs
            $hp = 0;
            $target->setHp($hp);
            if($game->getTurn() == 0) {
                $game->setCountBateauJ1($game->getCountBateauJ1() - 1);
                $game->setLogs($game->getLogs()."Attaque du bateau de type ".$attacker->getType()." n°".$attacker->getId()." sur le bateau de type ".$target->getType()." n°".$target->getId()." ⟶ ".$damage.' points de dégats. IL EST MORT !, ');
            }
            else if($game->getTurn() == 1) {
                $game->setCountBateauJ2($game->getCountBateauJ2() - 1);
                $game->setLogs($game->getLogs()."Attaque du bateau de type ".$attacker->getType()." n°".$attacker->getId()." sur le bateau de type ".$target->getType()." n°".$target->getId()." ⟶ ".$damage.' points de dégats. IL EST MORT !, ');
            }           
            
        }
        //S'il est encore vivant
        else {
            //Modification des HP
            $target->setHp($hp);
            if($game->getTurn() == 0) {
                $game->setLogs($game->getLogs()."IA : Attaque du bateau de type ".$attacker->getType()." n°".$attacker->getId()." sur le bateau de type ".$target->getType()." n°".$target->getId()." ⟶ ".$damage.' points de dégats,');
            }
            else if($game->getTurn() == 1) {
                $game->setLogs($game->getLogs()."JOUEUR : Attaque du bateau de type ".$attacker->getType()." n°".$attacker->getId()." sur le bateau de type ".$target->getType()." n°".$target->getId()." ⟶ ".$damage.' points de dégats,');
            }
        }

        $attacker->setHasAttacked(true);

        //return array("game" => $game,"attacker" => $attacker,"target" => $target);
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
}

?>