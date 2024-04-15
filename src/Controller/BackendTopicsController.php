<?php

namespace App\Controller;

use App\Entity\Topics;
use App\Form\TopicsType;
use App\Repository\TopicsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ThreadsRepository;


#[Route('/backend/topics')]
class BackendTopicsController extends AbstractController
{
    #[Route('/', name: 'app_backend_topics_index', methods: ['GET'])]
    public function index(TopicsRepository $topicsRepository): Response
    {
        return $this->render('backend/topics/index.html.twig', [
            'topics' => $topicsRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_backend_topics_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $topic = new Topics();
        $form = $this->createForm(TopicsType::class, $topic);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($topic);
            $entityManager->flush();

            return $this->redirectToRoute('app_backend_topics_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('backend/topics/new.html.twig', [
            'topic' => $topic,
            'form' => $form,
        ]);
    }

    #[Route('/{categoryId}', name: 'app_backend_topics_show', methods: ['GET'])]
    public function show(Topics $topic): Response
    {
        return $this->render('backend/topics/show.html.twig', [
            'topic' => $topic,
        ]);
    }

    #[Route('/{categoryId}/edit', name: 'app_backend_topics_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Topics $topic, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(TopicsType::class, $topic);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_backend_topics_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('backend/topics/edit.html.twig', [
            'topic' => $topic,
            'form' => $form,
        ]);
    }

    #[Route('/{categoryId}', name: 'app_backend_topics_delete', methods: ['POST'])]
    public function delete(Request $request, Topics $topic, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$topic->getCategoryId(), $request->request->get('_token'))) {
            $entityManager->remove($topic);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_backend_topics_index', [], Response::HTTP_SEE_OTHER);
    }




    #[Route('/backend/topics/delete/{id}', name: 'topic_delete')]
    public function deleteTopic($id, TopicsRepository $rep, ManagerRegistry $doctrine,ThreadsRepository $threadsRepository): Response
    {
        $em = $doctrine->getManager();

        // Find the topic by ID
        $topic = $rep->find($id);

        if (!$topic) {
            throw $this->createNotFoundException('Topic not found');
        }

        // Remove associated threads first
        $threads = $threadsRepository->findBy(['category' => $topic]);
        foreach ($threads as $thread) {
            $thread->setCategory(null);
            $em->persist($thread);
        }
        $em->flush();

        // Now remove the topic
        $em->remove($topic);
        $em->flush();

        return $this->redirectToRoute('app_backend_topics_index');
    }
}
