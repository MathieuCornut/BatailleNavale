<?php

namespace App\Service;

class UserFunction
{
    public function getLastLoginStr($last) : string {

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
}

?>