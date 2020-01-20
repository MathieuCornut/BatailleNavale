<?php

namespace App\Controller;

//Class Users
use App\Entity\User;
use App\Repository\UserRepository;
use App\Service\UserFunctions;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProfilController extends AbstractController
{
    /**
     * @Route("/users", name="users")
     */
    public function users()
    {
        $em = $this->getDoctrine()->getManager();
    	$users = $em->getRepository(User::class)->findAll();
        return $this->render('profil/users.html.twig', [
            'list' => $users,
        ]);
    }

    /**
     * @Route("/profile", name="self_profile")
     */
    public function self_profile()
    {
        $conn = $this->getDoctrine()->getManager()->getConnection();
        $user = $this->getUser();

        $sql = '
            SELECT id,pseudo,count_victory FROM user u
            ORDER BY u.count_victory DESC
            ';
        $stmt = $conn->query($sql);

        $sql_combats = '
            SELECT * FROM combat c
            WHERE joueur1 = "'.$user->getPseudo().'" OR joueur2 = "'.$user->getPseudo().
            '" ORDER BY c.timestamp DESC
        ';
        $stmt_combat = $conn->query($sql_combats);
        $combats = $stmt_combat->fetchAll();

        // returns an array of arrays (i.e. a raw data set)
        $ranking = $stmt->fetchAll();
        
        return $this->render('profil/profile.html.twig', [
            'ranking' => $ranking,
            'combats' => $combats
        ]);
    }

    /**
     * @Route("/profile/{id}", name="profile")
     */
    public function profile(User $user)
    {
        $conn = $this->getDoctrine()->getManager()->getConnection();

        $sql = '
            SELECT id,pseudo,count_victory FROM user u
            ORDER BY u.count_victory DESC
            ';
        $stmt = $conn->query($sql);
        
        $sql_combats = '
            SELECT * FROM combat c
            WHERE joueur1 = "'.$user->getPseudo().'" OR joueur2 = "'.$user->getPseudo().
            '" ORDER BY c.timestamp DESC
        ';
        $stmt_combat = $conn->query($sql_combats);
        $combats = $stmt_combat->fetchAll();

        // returns an array of arrays (i.e. a raw data set)
        $ranking = $stmt->fetchAll();
        
        return $this->render('profil/profile.html.twig', [
            'info' => $user,
            'ranking' => $ranking,
            'combats' => $combats
        ]);
    }

    /**
     * @Route("/logs/player/{pseudo}", name="player_logs")
     */
    public function logs(User $user)
    {
        $conn = $this->getDoctrine()->getManager()->getConnection();

        $sql_combats = '
            SELECT * FROM combat c
            WHERE joueur1 = "'.$user->getPseudo().'" OR joueur2 = "'.$user->getPseudo().
            '" ORDER BY c.timestamp DESC
        ';
        $stmt_combat = $conn->query($sql_combats);
        $combats = $stmt_combat->fetchAll();

        return $this->render('profil/logs.html.twig', [
            'info' => $user,
            'combats' => $combats
        ]);
    }
}
