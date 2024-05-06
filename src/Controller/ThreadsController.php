<?php

namespace App\Controller;

use App\Entity\Topics;
use App\Entity\Votes;
use App\Form\VotesType;
use App\Entity\Replies;
use App\Entity\Threads;
use App\Entity\User;
use App\Form\ThreadsType;
use App\Form\RepliesType;
use App\Repository\ThreadsRepository;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use GuzzleHttp\Client;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\Serializer\SerializerInterface;


#[Route('/threads')]
class ThreadsController extends AbstractController
{


    private $userRepository;
    private $user;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->userRepository = $entityManager->getRepository(User::class);
        //$this->user = $this->userRepository->findOneBy(['id' => 2]); // Adjust the condition as per your user entity
        //$user = $this->getUser();
    }



    #[Route('/', name: 'app_threads_index', methods: ['GET'])]
    public function index(Request $request, ThreadsRepository $threadsRepository, PaginatorInterface $paginator, EntityManagerInterface $entityManager): Response
    {
        $topics = $entityManager->getRepository(Topics::class)->findAll();

        $selectedCategory = $request->query->get('category');

        $searchTerm = $request->query->get('q');

        $sortOrder = $request->query->get('sortOrder', 'ASC');

        $threadsQuery = $threadsRepository->createQueryBuilder('t');

        if ($selectedCategory) {
            $threadsQuery->andWhere('t.category = :category')
                ->setParameter('category', $selectedCategory);
        }

        if ($searchTerm) {
            $threadsQuery->andWhere('t.title LIKE :searchTerm OR t.content LIKE :searchTerm')
                ->setParameter('searchTerm', '%'.$searchTerm.'%');
        }

        $threadsQuery->orderBy('t.createdAt', $sortOrder);

        $threadsQuery = $threadsQuery->getQuery();

        $threads = $paginator->paginate(
            $threadsQuery,
            $request->query->getInt('page', 1),
            6 // Items per page
        );

        return $this->render('threads/index.html.twig', [
            'threads' => $threads,
            'topics' => $topics,
            'selectedCategory' => $selectedCategory,
        ]);
    }

    #[Route('/new', name: 'app_threads_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {

        $user = $this->getUser(); // Retrieve the user from the session
        
        $thread = new Threads();
        $thread->setCreatedAt(new DateTime());
        $thread->setUser($user);
        $form = $this->createForm(ThreadsType::class, $thread);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Check if content is bad
            $content = $form->get('content')->getData();
            if ($this->isBadContent($content)) {
                // Display alert to the user
                $this->addFlash('danger', 'Your content contains inappropriate words. Please modify it.');
            } else {
                $entityManager->persist($thread);
                $entityManager->flush();

                return $this->redirectToRoute('app_threads_index', [], Response::HTTP_SEE_OTHER);
            }
        }

        return $this->renderForm('threads/new.html.twig', [
            'thread' => $thread,
            'form' => $form,
        ]);
    }

    #[Route('/{threadId}', name: 'threads_show',  methods: ['GET', 'POST'])]
    public function showThreads(Request $request, Threads $thread, EntityManagerInterface $entityManager): Response
    {
        $reply = new Replies();
        

        $user = $this->getUser(); // Retrieve the user from the session
        
        
        $reply->setUser($user);
        $reply->setCreatedAt(new DateTime());
        $reply->setThreads($thread);

        // On génère le formulaire
        $commentForm = $this->createForm(RepliesType::class, $reply);

        $commentForm->handleRequest($request);

        if ($commentForm->isSubmitted() && $commentForm->isValid()) {
            
            $entityManager->persist($reply);
            $entityManager->flush();
            return $this->redirect($request->getUri());
            //$this->addFlash('message', 'Votre commentaire a bien été envoyé');
            //return $this->redirectToRoute('threads_show', ['slug' => $thread->getThreadId()]);
        }


        $vote = new Votes();
        $vote->setUser($this->user);
        $vote->setThreads($thread);

        $existingVote = $entityManager->getRepository(Votes::class)->findOneBy([
            'user' => $this->user,
            'threads' => $thread
        ]);

        $hasUpvoted = false;
        $hasDownvoted = false;

        if ($existingVote) {
            if ($existingVote->getVoteType() === 'upvote') {
                $hasUpvoted = true;
            } elseif ($existingVote->getVoteType() === 'downvote') {
                $hasDownvoted = true;
            }
        }


        $voteForm = $this->createForm(VotesType::class, $vote, [
            'has_upvoted' => $hasUpvoted,
            'has_downvoted' => $hasDownvoted,
        ]);

        $voteForm->handleRequest($request);


        if ($voteForm->isSubmitted() && $voteForm->isValid()) {
            $voteType = $request->request->get('voteType');
            $vote->setVoteType($voteType);



            if ($existingVote && $existingVote->getVoteType() === $voteType) {
                $entityManager->remove($existingVote);
            } else {
                // If the user already voted but clicked a different vote type, update the existing vote
                if ($existingVote) {
                    $entityManager->remove($existingVote);
                }

                // Set the vote type for the new vote
                $vote->setVoteType($voteType);

                // Persist the new or updated vote entity to the database
                $entityManager->persist($vote);
            }

            $entityManager->flush();
            return $this->redirect($request->getUri());

        }



        return $this->render('threads/show.html.twig', [
            'thread' => $thread,
            'commentForm' => $commentForm->createView(),
            'voteForm' => $voteForm->createView(),
            'currentUser' => $this->user, // Pass the current user to the template


        ]);
    }


    #[Route('/{threadId}/edit', name: 'app_threads_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Threads $thread, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ThreadsType::class, $thread);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_threads_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('threads/edit.html.twig', [
            'thread' => $thread,
            'form' => $form,
        ]);
    }

    #[Route('/{threadId}', name: 'app_threads_delete', methods: ['POST'])]
    public function delete(Request $request, Threads $thread, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$thread->getThreadId(), $request->request->get('_token'))) {
            $entityManager->remove($thread);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_threads_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/{threadId}/{replyId}', name: 'front_reply_delete', methods: ['GET', 'POST'])]
    public function deleteR(Request $request, Replies $reply, EntityManagerInterface $entityManager): Response
    {
        if ($request->isMethod('POST')) {
            // Ensure the CSRF token is valid
            $csrfToken = $request->request->get('_token');
            if ($this->isCsrfTokenValid('delete'.$reply->getReplyId(), $csrfToken)) {
                $threadId = $request->attributes->get('threadId');

                // Remove the reply from the database
                $entityManager->remove($reply);
                $entityManager->flush();
            }

            // Redirect back to the thread after deletion
            return $this->redirectToRoute('threads_show', ['threadId' => $threadId]);
        }


        return $this->redirectToRoute('app_threads_index');
    }

    #[Route('/generate-title-ajax', name: 'generate_title_ajax', methods: ['POST'])]
    public function generateTitleAjax(Request $request): JsonResponse
    {
        $content = $request->request->get('content');

        $title = $this->chatGPTRequest($content);

        // Return the generated title as JSON response
        return new JsonResponse(['title' => $title]);
    }

    private function isBadContent($content)
    {
        $client = new Client([
            'headers' => [
                'X-RapidAPI-Host' => 'neutrinoapi-bad-word-filter.p.rapidapi.com',
                'X-RapidAPI-Key' => '8433d15735msh2702a52a05e99bdp1e7f6djsn60b6c77343ce',
                'content-type' => 'application/x-www-form-urlencoded    ',
            ],
        ]);

        $response = $client->request('POST', 'https://neutrinoapi-bad-word-filter.p.rapidapi.com/bad-word-filter', [
            'form_params' => [
                'content' => $content,
                'censor-character' => '*'
            ]
        ]);

        $body = json_decode($response->getBody(), true);

        // Check if the response indicates bad content
        return $body['is-bad'];
    }

    function chatGPTRequest($content)
    {
        $client = new Client();

        $response = $client->request('POST', 'https://chatgpt-api8.p.rapidapi.com/', [
            'json' => [
                [
                    "content" => $content,
                    "role" => "user"
                ]
            ],
            'headers' => [
                'X-RapidAPI-Host' => 'chatgpt-api8.p.rapidapi.com',
                'X-RapidAPI-Key' => '8433d15735msh2702a52a05e99bdp1e7f6djsn60b6c77343ce',
                'content-type' => 'application/json',
            ],
        ]);

        $responseData = json_decode($response->getBody(), true);
        return $responseData['text'];
    }

}
