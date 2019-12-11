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
     * @Route("/ranking", name="ranking")
     */
    public function index(UserFunction $service, UserRepository $userRepository)
    {
        //On récupère le classement par nombre de victoire
        $ranking = $userRepository->getRanking();

        //On formate la date de dernière connexion en "il y a X TEMPS"
        for($i = 0; $i < count($ranking) ; $i++) {
            $ranking[$i]['last_login'] = $service->getLastLoginStr($ranking[$i]['last_login']);
        }
    
        return $this->render('ranking/ranking.html.twig', [
            'ranking' => $ranking
        ]);
    }
}
