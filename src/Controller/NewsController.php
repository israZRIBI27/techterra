<?php

namespace App\Controller;
use App\Repository\CommentsRepository;
use Psr\Log\LoggerInterface;
use App\Form\ReportFormType;
use App\Entity\Comments;
use App\Form\CommentsType;
use App\Entity\News;
use App\Form\NewsType;
use App\Form\ReportsType;
use App\Form\ReportsRep;
use App\Entity\Reports;
use App\Entity\User;
use App\Repository\NewsRepository;
use App\Repository\UserRepository;
use App\Repository\ReportsRepository;
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
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Knp\Component\Pager\PaginatorInterface;
use GuzzleHttp\Client;


use Symfony\Contracts\Translation\TranslatorInterface;

use Symfony\Component\String\Slugger\SluggerInterface;

use Symfony\Component\Mime\Address;





#[Route('/news')]
class NewsController extends AbstractController
{

    private $userRepository;
    private $user;

    

    public function __construct(EntityManagerInterface $entityManager,TranslatorInterface $translator)
    {
        $this->userRepository = $entityManager->getRepository(User::class);
      //  $this->user = $this->userRepository->findOneBy(['userId' => 1]); // Adjust the condition as per your user entity
        $this->translator = $translator;
    }

    #[Route('/admin', name: 'app_news_indexAdmin', methods: ['GET'])]
    public function indexAdmin(NewsRepository $newsRepository): Response
    {
        return $this->render('news/backindex.html.twig', [
            'news' => $newsRepository->findAll(),
        ]);
    }
    #[Route('/about', name: 'app_news_indexAbout')]
    public function votreAction(NewsRepository $newsRepository,PaginatorInterface $paginator,Request $request): Response
    {
        $news = $newsRepository->findAll();
 
        $news = $paginator->paginate(
            $news, /* query NOT result */
            $request->query->getInt('page',1),
            2
        );
        return $this->render('news/about.html.twig', [
            'news' => $news,
        ]);
       
    }
    #[Route('/views', name: 'app_views')]
    public function views(NewsRepository $newsRepository,PaginatorInterface $paginator,Request $request): Response
    {
         // Récupérer les actualités triées par le nombre de vues
    // Récupérer les actualités triées par le nombre de vues
    $news = $newsRepository->findBy([], ['views' => 'DESC']);

    // Paginer les actualités
    $news = $paginator->paginate(
        $news, 
        $request->query->getInt('page', 1), // Obtient le numéro de page à partir de la requête, par défaut 1
        10 // Nombre d'éléments par page
    );

    return $this->render('news/service.html.twig', [
        'news' => $news,
    ]);
    }
   
    #[Route('/', name: 'app_news_index', methods: ['GET'])]
    public function index(NewsRepository $newsRepository,PaginatorInterface $paginator,Request $request): Response
    {
        $news = $newsRepository->findAll();
 
        $news = $paginator->paginate(
            $news, /* query NOT result */
            $request->query->getInt('page',1),
            4
        );
        return $this->render('news/index.html.twig', [
            'news' => $news,
        ]);
    }

    #[Route('/new', name: 'app_news_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, MailerInterface $mailer): Response
    {
        $news = new News();
        $form = $this->createForm(NewsType::class, $news);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            // Persist the news item to the database
            $entityManager->persist($news);
            $entityManager->flush();
    
            // Send email notification
            $email = (new TemplatedEmail())
                ->from('Trabelsieya99@gmail.com')
                ->to('youssefbouhachem2002@gmail.com')
                ->subject('New Headline!')
                ->htmlTemplate('news/mail.html.twig')
                ->context([
                    'news' => $news,
                ]);
    
            $mailer->send($email);
    
            // Redirect to the news index page after successful submission
            return $this->redirectToRoute('app_news_index', [], Response::HTTP_SEE_OTHER);
        }
    
        return $this->renderForm('news/new.html.twig', [
            'news' => $news,
            'form' => $form,
        ]);
    }
    
   

    
    #[Route('/{id}', name: 'app_news_show1', methods: ['GET', 'POST'])]
    public function show1(int $id, Request $request): Response
    {

        
        $entityManager = $this->getDoctrine()->getManager();
        
        // Retrieve the news
        $news = $entityManager->getRepository(News::class)->find($id);
        
        $user = $this->getUser();
    
        // Increment the views count for the news article
        $news->setViews($news->getViews() + 1);
        
        // Persist the updated news entity
        $entityManager->persist($news);
        $entityManager->flush();
        
        // Retrieve the comments associated with the news
        $comments = $entityManager->getRepository(Comments::class)->findBy(['news' => $news]);
    
        // Create a new instance of the Comments entity
        $comment = new Comments();
    
        // Set the user for the comment
        $comment->setUser($user);
    
        $audioUrl = $this->textToSpeech($news->getContent());
        // Set the time for the comment
        $comment->setTime(new \DateTime());
    
        // Set the news associated with the comment
        $comment->setNews($news);
    
        // Create the comment form
        $commentForm = $this->createForm(CommentsType::class, $comment);
    
        // Handle form submission for comments
        $commentForm->handleRequest($request);
        if ($commentForm->isSubmitted() && $commentForm->isValid()) {
            // Persist and flush the comment
            $entityManager->persist($comment);
            $entityManager->flush();
    
            $this->addFlash('success', 'Your comment has been successfully posted.');
    
            // Redirect to the same page to prevent resubmission
            return $this->redirectToRoute('app_news_index');
        }
    
        // Create the report form
        $report = new Reports();
        $report->setUser($user);
        $report->setNews($news);
    
        // Check if an existing report with the same status exists
        $existingReport = $entityManager->getRepository(Reports::class)->findOneBy([
            'user' => $user,
            'news' => $news
        ]);
        $hasReported = $existingReport && $existingReport->getReportStatus() === 'reported';
    
        $reportForm = $this->createForm(ReportsType::class, $report, [
            'has_reported' => $hasReported,
        ]);
    
        // Handle form submission for reports
        if ($request->isMethod('POST')) {
            $reportForm->handleRequest($request);
            if ($reportForm->isSubmitted() && $reportForm->isValid()) {
                $ReportStatus = $request->request->get('ReportStatus');
    
                if ($existingReport && $existingReport->getReportStatus() === $ReportStatus) {
                    // If an existing report with the same status exists, remove it
                    $entityManager->remove($existingReport);
                    
                    // Decrement the reports count for the news
                    $news->setReports($news->getReports() - 1);
                    
                    // Persist the news entity to the database
                    $entityManager->persist($news);
                } else {
                    // Set the report status for the new report
                    $report->setReportStatus($ReportStatus);
                    
                    // Increment the reports count for the news
                    $news->setReports($news->getReports() + 1);
                    
                    // Persist the new or updated report entity and news entity to the database
                    $entityManager->persist($report);
                    $entityManager->persist($news);
                }
    
                // Flush changes to the database
                $entityManager->flush();
    
                // Redirect to the same page to prevent resubmission
                return $this->redirect($request->getUri());
            }
        }
    
        // Check if the reports count has reached 3 or more
        if ($news->getReports() >= 3) {
            // Delete the news article
            $entityManager->remove($news);
            $entityManager->flush();
            
            $this->addFlash('success', 'The news article has been deleted due to multiple reports.');
            
            // Redirect to the news index page or any other appropriate page
            return $this->redirectToRoute('app_news_index');
        }
    
        // Render the template with the news, comments, and forms
        return $this->render('news/show.html.twig', [
            'news' => $news,
            'comments' => $comments,
            'commentForm' => $commentForm->createView(),
            'reportForm' => $reportForm->createView(),
            'audioUrl' => $audioUrl, // Pass the audio URL to the Twig template
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
    #[Route('/admin/{idNews}', name: 'app_news_deleteAdmin', methods: ['POST'])]
    public function deleteAdmin(Request $request, News $news, EntityManagerInterface $entityManager): Response
    {

        if ($this->isCsrfTokenValid('delete'.$news->getIdNews(), $request->request->get('_token'))) {
            $entityManager->remove($news);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_news_indexAdmin', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/{idNews}/{commentId}', name: 'front_reply_delete', methods: ['GET', 'POST'])]
    public function deleteR(Request $request, Comments $comment, EntityManagerInterface $entityManager): Response
    {
        if ($request->isMethod('POST')) {
            // Ensure the CSRF token is valid
            $csrfToken = $request->request->get('_token');
            if ($this->isCsrfTokenValid('delete'.$comment->getCommentId(), $csrfToken)) {
                $idNews = $request->attributes->get('idNews');

                // Remove the reply from the database
                $entityManager->remove($comment);
                $entityManager->flush();
            }

            // Redirect back to the thread after deletion
            return $this->redirectToRoute('app_news_show1', ['idNews' => $idNews]);
        }


        return $this->redirectToRoute('app_news_index');
    }
/**
 * Converts text to speech using an API and returns the URL of the audio file.
 */
private function textToSpeech($text)
{
    // Initialize Guzzle client
    $client = new \GuzzleHttp\Client();

    try {
        // Make a POST request to the text-to-speech API
        $response = $client->post('https://text-to-speech-for-28-languages.p.rapidapi.com/', [
            'headers' => [
                'X-RapidAPI-Host' => 'text-to-speech-for-28-languages.p.rapidapi.com',
                'X-RapidAPI-Key' => '85c73e027dmsh97443d0cbca91eep114bfbjsnea476dadc718',
                'Content-Type' => 'application/x-www-form-urlencoded',
            ],
            'form_params' => [
                'msg' => $text,
                'lang' => 'Salli', // Language code (adjust as needed)
                'source' => 'ttsmp3'
            ]
        ]);

        // Parse the response body as JSON
        $responseData = json_decode($response->getBody(), true);

        // Check if the response contains a URL field
        if (isset($responseData['URL'])) {
            // Return the URL of the audio file
            return $responseData['URL'];
        } else {
            // Handle the case where the response does not contain a URL field
            echo 'Error: Response does not contain a URL field';
            return null;
        }
    } catch (\Exception $e) {
        // Handle any errors
        echo 'Error: ' . $e->getMessage();
        return null; // Return null in case of error
    }
}


}