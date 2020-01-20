<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use App\Repository\UserRepository;
use App\Service\UserFunction;



class RankingController extends AbstractController
{
    /**
     * @Route("/ranking/{page<\d+>?1}", name="ranking")
     */
    public function pagi(UserFunction $service, UserRepository $userRepository, $page)
    {
        $_rank = $userRepository->getPagi();

        $limit = 10;
        $start = $page * $limit - $limit;
        $total = count($_rank);
        $pages = ceil($total / $limit);

        $_classement = [];
        for($i = $start; $i < $start + $limit; $i++){
            if(array_key_exists($i, $_rank) == TRUE) {
                array_push(
                    $_classement,
                    array_merge(
                        $_rank[$i],
                        array(
                            'ranking' => $i + 1,
                        )
                    )
                ); 
            }
            else {
                break;
            }     
        }

        return $this->render('ranking/ranking.html.twig', [
            'classement' => $_classement,
            'pages' => $pages,
            'page' => $page,
            
        ]);
    }
}
