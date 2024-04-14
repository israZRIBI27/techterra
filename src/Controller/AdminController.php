<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\User;
use App\Repository\UserRepository;

class AdminController extends AbstractController
{
    #[Route('/admin', name: 'app_admin')]
    public function index(): Response
    {
        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }

    #[Route('/admin/userManagement', name: 'app_admin_userManagement')]
    public function showUsers(UserRepository $rep): Response
    {
        $users = $rep->findAll();
        return $this->render('admin/user/userslist.html.twig', ['users'=>$users]);
    }

    #[Route('/admin/userManagement/deleteUser/{id}', name: 'app_admin_userManagement_deleteUser')]
     public function deleteUser($id, UserRepository $rep, ManagerRegistry $doctrine): Response
     {
         $em= $doctrine->getManager();
         $user= $rep->find($id);

         $profilePictureFileName = $user->getUserPicture();

         $profilePicturePath = $this->getParameter('profile_images_directory') . '/' . $profilePictureFileName;
     
         // Delete the profile picture file using unlink function
         if (file_exists($profilePicturePath)) {
             unlink($profilePicturePath);
         }

         $em->remove($user);
         $em->flush();
         return $this-> redirectToRoute('app_admin_userManagement');
     }






}
