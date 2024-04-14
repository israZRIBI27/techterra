<?php

namespace App\Controller;

use App\Entity\Threads;
use App\Form\Threads1Type;
use App\Repository\ThreadsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/backend/threads')]
class BackendThreadsController extends AbstractController
{
    #[Route('/', name: 'app_backend_threads_index', methods: ['GET'])]
    public function index(ThreadsRepository $threadsRepository): Response
    {
        return $this->render('backend/threads/index.html.twig', [
            'threads' => $threadsRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_backend_threads_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $thread = new Threads();
        $form = $this->createForm(Threads1Type::class, $thread);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($thread);
            $entityManager->flush();

            return $this->redirectToRoute('app_backend_threads_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('backend/threads/new.html.twig', [
            'thread' => $thread,
            'form' => $form,
        ]);
    }

    #[Route('/{threadId}', name: 'app_backend_threads_show', methods: ['GET'])]
    public function show(Threads $thread): Response
    {
        return $this->render('backend/threads/show.html.twig', [
            'thread' => $thread,
        ]);
    }

    #[Route('/{threadId}/edit', name: 'app_backend_threads_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Threads $thread, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(Threads1Type::class, $thread);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_backend_threads_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('backend/threads/edit.html.twig', [
            'thread' => $thread,
            'form' => $form,
        ]);
    }

    #[Route('/{threadId}', name: 'app_backend_threads_delete', methods: ['POST'])]
    public function delete(Request $request, Threads $thread, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$thread->getThreadId(), $request->request->get('_token'))) {
            $entityManager->remove($thread);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_backend_threads_index', [], Response::HTTP_SEE_OTHER);
    }
}
