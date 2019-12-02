<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class RankingController extends AbstractController
{
    /**
     * @Route("/ranking", name="ranking")
     */
    public function index()
    {
        $conn = $this->getDoctrine()->getManager()->getConnection();

        $sql = '
            SELECT id,pseudo,count_victory FROM user u
            ORDER BY u.count_victory DESC
            ';
        $stmt = $conn->query($sql);

        // returns an array of arrays (i.e. a raw data set)
        $ranking = $stmt->fetchAll();

        return $this->render('ranking/index.html.twig', [
            'ranking' => $ranking
        ]);
    }
}
