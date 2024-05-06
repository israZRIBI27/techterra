<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\EditProfileType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\PasswordHasher\Hasher\PasswordHasherInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;


class UserController extends AbstractController
{
    #[Route('/profile', name: 'app_user')]
    public function index(Request $request): Response
    {


        $user = $this->getUser();
        $form = $this->createForm(EditProfileType::class, $user);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $pictureFile = $form->get('user_picture')->getData();
            $newFilename = md5(uniqid()) . '.' . $pictureFile->guessExtension();

            try {
                $pictureFile->move(
                    $this->getParameter('profile_images_directory'),
                    $newFilename
                );
            } catch (FileException $e) {
                return new Response($e->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR);
            }

            $user->setUserPicture($newFilename);

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            $this->addFlash('message', 'Profil mis à jour');
            return $this->redirectToRoute('app_user');
        }

        return $this->render('user/profile.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/profile/editPassword', name: 'app_user_editpassword')]
    public function editPass(Request $request, UserPasswordHasherInterface $userPasswordHasher): Response
    {
        if ($request->isMethod('POST')) {
            $em = $this->getDoctrine()->getManager();
            $user = $this->getUser();

            // Check if the two passwords match
            if ($request->request->get('pass') === $request->request->get('pass2')) {
                $user->setPassword(
                    $userPasswordHasher->hashPassword(
                        $user,
                        $request->request->get('pass')
                    )
                );

                $em->flush();

                $this->addFlash('message', 'Mot de passe mis à jour avec succès');
                return $this->redirectToRoute('app_user');
            } else {
                $this->addFlash('error', 'Les deux mots de passe ne sont pas identiques');
            }
        }

        return $this->render('user/editPassword.html.twig');
    }

}
