<?php

namespace App\Controller;

use App\Entity\Replies;
use App\Form\Replies1Type;
use App\Repository\RepliesRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/backend/replies')]
class BackendRepliesController extends AbstractController
{
    #[Route('/', name: 'app_backend_replies_index', methods: ['GET'])]
    public function index(RepliesRepository $repliesRepository): Response
    {
        return $this->render('/backend/replies/index.html.twig', [
            'replies' => $repliesRepository->findAll(),
        ]);
    }


    #[Route('/{replyId}', name: 'app_backend_replies_show', methods: ['GET'])]
    public function show(Replies $reply): Response
    {
        return $this->render('/backend/replies/show.html.twig', [
            'reply' => $reply,
        ]);
    }

    #[Route('/{replyId}/edit', name: 'app_backend_replies_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Replies $reply, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(Replies1Type::class, $reply);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_backend_replies_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('replies/edit.html.twig', [
            'reply' => $reply,
            'form' => $form,
        ]);
    }

    #[Route('/{replyId}', name: 'app_backend_replies_delete', methods: ['POST'])]
    public function delete(Request $request, Replies $reply, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reply->getReplyId(), $request->request->get('_token'))) {
            $entityManager->remove($reply);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_backend_replies_index', [], Response::HTTP_SEE_OTHER);
    }
}
