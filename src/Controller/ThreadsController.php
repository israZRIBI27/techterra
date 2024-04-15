<?php

namespace App\Controller;

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
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/threads')]
class ThreadsController extends AbstractController
{


    private $userRepository;
    private $user;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->userRepository = $entityManager->getRepository(User::class);
        $this->user = $this->userRepository->findOneBy(['userId' => 1]); // Adjust the condition as per your user entity
    }


    #[Route('/', name: 'app_threads_index', methods: ['GET'])]
    public function index(ThreadsRepository $threadsRepository): Response
    {
        return $this->render('threads/index.html.twig', [
            'threads' => $threadsRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_threads_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $thread = new Threads();
        $thread->setCreatedAt(new DateTime());
        $thread->setUser($this->user);
        $form = $this->createForm(ThreadsType::class, $thread);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($thread);
            $entityManager->flush();

            return $this->redirectToRoute('app_threads_index', [], Response::HTTP_SEE_OTHER);
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
        $reply->setUser($this->user);
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
            'voteForm' => $voteForm->createView()

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


}
