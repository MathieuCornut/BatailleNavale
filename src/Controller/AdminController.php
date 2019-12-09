<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Form\ChangeRoleType;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function admin()
    {
        return $this->render('admin/admin.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }

    /**
     * @Route("/admin/users", name="admin_users")
     */
    public function admin_users(UserRepository $userRepository): Response
    {
        /*$conn = $this->getDoctrine()
                        ->getRepository($userRepository)
                        ->findBy(['roles'=>'ROLE_USER,ROLE_BANNED']);
        
        $sql = '
            SELECT * FROM user u
            WHERE roles LIKE "%ROLE_USER% OR roles LIKE %ROLE_BANNED%"
            ';
        $stmt = $conn->query($sql);

        //On mets le classement dans un tableau
        $users = $stmt->fetchAll();

        return $this->render('admin/users.html.twig', [
            'users' => $users,
        ]);*/
    }

    /**
     * @Route("/admin/user/{id}", name="edit_role")
     */
    public function admin_editRole(Request $request, User $user)
    {
        $form = $this->createForm(ChangeRoleType::class, $user);

        $form->handleRequest($request);
        
        if($form->isSubmitted() && $form->isValid()){
	        $em = $this->getDoctrine()->getManager();
	        $em->persist($user);
	        $em->flush();

	        return $this->redirectToRoute('admin_users');
        }
        
        return $this->render('admin/users.html.twig', [
            'form'  =>  $form->createView()
        ]);
    }
}

