<?php

namespace App\Service;

use App\Entity\Combat;
use App\Repository\CombatRepository;

use App\Entity\Boat;
use App\Repository\BoatRepository;

class GameFunctions
{
    public function showLogs($logs) {
        $logs_html = explode(',',$logs);
        return $logs_html;
    }

    public function attack($game,$target) {
        $att = random_int(1,100);
        $def = $target->getDefense();

        $damage = $att - $def;
        if($damage <= 0) {
            $damage = 0;
        }

        $hp = $target->getHp();
        $hp -= $damage;
        
        if($hp < 0) {
            $hp = 0;
            $target->setHp($hp);
            $game->setCountBateauJ2($game->getCountBateauJ2() - 1);  
            return "Attaque du joueur 1 sur le bateau de type ".$target->getType()." --> ".$damage.' points de dégats. IL EST MORT !, ';
        }
        else {
            $target->setHp($hp);
            return "Attaque du joueur 1 sur le bateau de type ".$target->getType()." --> ".$damage.' points de dégats,';
        }
    }

    public function finish($game) {
        $game->setStatus(2);
        $game->setVainqueur($game->getJoueur1());

        return $game;
    }
}

?>