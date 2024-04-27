<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use League\OAuth2\Client\Provider\Facebook;
use App\Entity\User;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use App\Security\UserAuthenticator;
use Symfony\Component\Security\Guard\GuardAuthenticatorHandler;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Guard\AuthenticatorInterface;
use DateTime;

class MainController extends AbstractController
{

    private $provider;
    public function __construct(UserPasswordHasherInterface $userPasswordHasher){
        $this->provider = new \League\OAuth2\Client\Provider\Facebook([
            'clientId' => $_ENV['FCB_ID'],
            'clientSecret' => $_ENV['FCB_SECRET'],
            'redirectUri' => $_ENV['FCB_CALLBACK'],
            'graphApiVersion' => 'v19.0',
        ]);

        $this->userPasswordHasher = $userPasswordHasher;
    }

    #[Route('/', name: 'app_main')]
    public function index(): Response
    {
        return $this->render('main/index.html.twig');
    }

    #[Route('/fblogin', name: 'app_fblogin')]
    public function fblogin(): Response
    {
        $helper_url = $this->provider->getAuthorizationUrl();
        
        return $this->redirect($helper_url);
    }

    #[Route('/fcb-callback', name: 'fcb_callback')]
    public function fcbCallback(UserRepository $userDb, Request $request, GuardAuthenticatorHandler $guardHandler, UserAuthenticator $authenticator, EntityManagerInterface $manager): Response
    {
        $token = $this->provider->getAccessToken('authorization_code', [
            'code' => $_GET['code']
        ]);

        try {
            $user = $this->provider->getResourceOwner($token);
            $user = $user->toArray();
            $email = $user['email'];
            $username = $user['name'];
            $firstname = $user['first_name'];
            $lastname = $user['last_name'];
            $picture = $user['picture_url'];

            $imageContent = file_get_contents($picture);    
            $filename = md5(uniqid()) . '.png';
            $destinationFolder = $this->getParameter('profile_images_directory');
            $localImagePath = $destinationFolder . '/' . $filename;
            file_put_contents($localImagePath, $imageContent);

            $user_exist = $userDb->findOneByEmail($email);

            
            if ($user_exist) {
                $user = $user_exist;
                $this->addFlash('success', 'Logged in successfully.');
                return $guardHandler->authenticateUserAndHandleSuccess($user, $request, $authenticator, 'main');
            } else {
                //default birthday
                $birthday = new DateTime('1990-01-01');
                $randomPassword = bin2hex(random_bytes(8)); // Generate an 
                $new_user = new User();
                $new_user->setUserFirstname($firstname)
                    ->setUserUsername($username)
                    ->setUserLastname($lastname)
                    ->setEmail($email)
                    ->setRoles(array("ROLE_USER"))
                    ->setUserLevel(1)
                    ->setPassword($this->userPasswordHasher->hashPassword($new_user, $randomPassword))
                    ->setUserPicture($filename)
                    ->setUserBirthday($birthday)
                    ->setUserPhonenumber("Undefined")
                    ->setUserGender("Neutral");
                $manager->persist($new_user);
                $manager->flush();
                return $this->redirectToRoute('app_login');
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
