<?php

namespace App\Controller;
use App\Repository\CommentsRepository;
use Psr\Log\LoggerInterface;

use App\Entity\Comments;
use App\Form\CommentsType;
use App\Entity\News;
use App\Form\NewsType;
use App\Entity\User;
use App\Repository\NewsRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Cache\CacheInterface;
use Symfony\Contracts\Cache\ItemInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use DateTime;



#[Route('/news')]
class NewsController extends AbstractController
{

    private $userRepository;
    private $user;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->userRepository = $entityManager->getRepository(User::class);
        $this->user = $this->userRepository->findOneBy(['userId' => 1]); // Adjust the condition as per your user entity
    }


    #[Route('/', name: 'app_news_index', methods: ['GET'])]
    public function index(NewsRepository $newsRepository): Response
    {
        return $this->render('news/index.html.twig', [
            'news' => $newsRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_news_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $news = new News();
        $form = $this->createForm(NewsType::class, $news);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($news);
            $entityManager->flush();

            return $this->redirectToRoute('app_news_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('news/new.html.twig', [
            'news' => $news,
            'form' => $form,
        ]);
    }

   
    #[Route('/{idNews}', name: 'app_news_show', methods: ['GET', 'POST'])]
    public function show(Request $request, News $news, EntityManagerInterface $entityManager): Response
    {

        $Comments = $entityManager->getRepository(Comments::class)->findBy(['news' => $news]);
        
        // Create a new instance of the Comments entity
        $comment = new Comments();
        
        // Assuming you have access to the current user through security component
        $user = $entityManager->getRepository(User::class)->find(1);
        $comment->setUser($user);
        

        
        // Set the current time for the comment
        $comment->setTime(new \DateTime());
        
        // Set the associated news for the comment
        $comment->setNews($news);
        
        // Create the comment form
        $commentForm = $this->createForm(CommentsType::class, $comment);
        
        // Handle form submission
        $commentForm->handleRequest($request);
        if ($commentForm->isSubmitted() && $commentForm->isValid()) {
            // Debugging to check if the form is valid and the comment object
            var_dump($commentForm->isValid());
            dump($comment);
        
            // Persist and flush the comment
            $entityManager->persist($comment);
            $entityManager->flush();
        
            $this->addFlash('success', 'Your comment has been successfully posted.');
        
            // Redirect to the same page to prevent resubmission
            return $this->redirectToRoute('app_news_show', ['idNews' => $news->getIdNews()]);
        }
        // Render the template with the news, comments, and comment form
        return $this->render('news/show.html.twig', [
            'news' => $news,
            'Comments' => $Comments,
            'commentForm' => $commentForm->createView(),
        ]);
    }
    
    


    #[Route('/{idNews}/edit', name: 'app_news_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, News $news, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(NewsType::class, $news);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_news_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('news/edit.html.twig', [
            'news' => $news,
            'form' => $form,
        ]);
    }

    #[Route('/{idNews}', name: 'app_news_delete', methods: ['POST'])]
    public function delete(Request $request, News $news, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$news->getIdNews(), $request->request->get('_token'))) {
            $entityManager->remove($news);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_news_index', [], Response::HTTP_SEE_OTHER);
    }
}
