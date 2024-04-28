<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\User;
use App\Repository\UserRepository;
use Knp\Component\Pager\PaginatorInterface;



class AdminController extends AbstractController
{
    #[Route('/admin', name: 'app_admin')]
    public function index(UserRepository $userRepository): Response
    {
        $userGenderStatistics = $userRepository->getUserGenderStatistics();
        $userVerificationStatistics = $userRepository->getUserVerificationStatistics();
        return $this->render('admin/index.html.twig', [
            'user_gender_statistics' => $userGenderStatistics, 'user_verification_statistics' => $userVerificationStatistics,
        ]);
    }

   

    #[Route('/admin/userManagement', name: 'app_admin_userManagement')]
    public function show(UserRepository $rep, Request $request, PaginatorInterface $paginator): Response
    {
        $query = $request->query->get('q');
    
        if ($query) {
            $users = $rep->findBySearchQuery($query); // À implémenter dans ProductRepository
        } else {
            $users = $rep->findAll();
        }
    
        $users = $paginator->paginate(
            $users,
            $request->query->getInt('page', 1),
            1
        );
    
        return $this->render('admin/user/userslist.html.twig', ['users'=>$users]);

    }





    #[Route('/admin/userManagement/Search', name: 'app_admin_userSearch')]
    public function searchUsers(Request $request): Response
    {
        $searchTerm = $request->query->get('searchTerm', '');
        $queryBuilder = $rep->findBySearchTerm($searchTerm);


        // Get the search query from the request
        $query = $request->request->get('query');
        // Find users by ID
        $queryBuilder = $rep->findBySearchTerm($searchTerm);


        // Render the filtered users using a Twig template
        return $this->render('admin/user/userslist.html.twig', ['users'=>$queryBuilder]);

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
