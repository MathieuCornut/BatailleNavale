<?php

namespace App\Service;

class UserFunction
{
    public function getLastLoginStr($last) : string {
        $last = date_create($last); 

        $now = new \DateTime();

        $difference = date_diff($last,$now);

        if($difference->format('%y') >= 1) {
            $diff = $difference->format('%y')." ans";
        }
        else if($difference->format('%i') < 1) {
            $diff = "peu";
        }
        else if($difference->format('%h') < 1) {
            $diff = $difference->format('%i')." minutes";
        }
        else if($difference->format('%d') < 1) {
            $diff = $difference->format('%h')." heures";
        }
        else if($difference->format('%m') < 1) {
            $diff = $difference->format('%d')." jours";
        }
        else if($difference->format('%y') < 1) {
            $diff = $difference->format('%m')." mois";
        }
        return $diff;
    } 

    public function showLogs($logs) {
        $logs_html = explode(',',$logs);
        return $logs_html;
    }

    public function attack($game,$target) {
        
        $att = random_int(1,100);
        $def = random_int(1,50);

        $damage = $att - $def;
        if($damage <= 0) {
            $damage = 0;
        }

        $hp = $game->getHpJ2();
        $hp[$target-1] -= $damage;
        
        if($hp[$target-1] <= 0) {
            $hp[$target-1] = 0;
            $game->setHpJ2($hp);
            return "Attaque du joueur 1 sur le bateau adverse n°".$target."--> ".$damage.' points de dégats. IL EST MORT !, ';
        }
        else {
            $game->setHpJ2($hp);
            return "Attaque du joueur 1 sur le bateau adverse n°".$target."--> ".$damage.' points de dégats,';
        }
    }

    public function finish($game) {
        $game->setStatut(2);
        $game->setVainqueur($game->getJoueur1());

        return $game;
    }
}

?>