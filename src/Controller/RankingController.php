<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\UserFunction;

class RankingController extends AbstractController
{
    /**
     * @Route("/ranking", name="ranking")
     */
    public function index(UserFunction $service)
    {
        $conn = $this->getDoctrine()->getManager()->getConnection();

        //On demande tous les utilisateurs classés par nombre de victoires
        $sql = '
            SELECT id,pseudo,count_victory,last_login FROM user u
            ORDER BY u.count_victory DESC
            ';
        $stmt = $conn->query($sql);

        //On mets le classement dans un tableau
        $ranking = $stmt->fetchAll();

        //On formate la date de dernière connexion en "il y a X TEMPS"
        for($i = 0; $i < count($ranking) ; $i++) {
            $ranking[$i]['last_login'] = $service->getLastLoginStr($ranking[$i]['last_login']);
        }
    
        return $this->render('ranking/ranking.html.twig', [
            'ranking' => $ranking
        ]);
    }
}
