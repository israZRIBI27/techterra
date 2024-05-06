<?php

namespace App\Controller;

use App\Entity\Sponsor;
use App\Form\SponsorType;
use App\Repository\SponsorRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\HttpFoundation\StreamedResponse;
use PhpOffice\PhpSpreadsheet\Spreadsheet;


#[Route('/sponsor')]
class SponsorController extends AbstractController
{
    #[Route('/export-excel', name: 'app_sponsor_export_excel')]
    public function exportExcel(SponsorRepository $sponsorRepository)
    {
        $sponsors = $sponsorRepository->findAll();
        $headerRow = [
            'Nom du sponsor',
            'Montant',
            'Titre de l\'événement',
        ];
        $excelData = [];
        $excelData[] = $headerRow;
        foreach ($sponsors as $sponsor) {
            $excelData[] = [
                $sponsor->getNom(),
                $sponsor->getMontant(),
                $sponsor->getIdevenement()->getTitreevent(),
            ];
        }
        $spreadsheet = new \PhpOffice\PhpSpreadsheet\Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->fromArray($excelData, null, 'A1');
        $writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
        $response = new StreamedResponse(function () use ($writer) {
            $writer->save('php://output');
        });
        $disposition = $response->headers->makeDisposition(
            ResponseHeaderBag::DISPOSITION_ATTACHMENT,
            'sponsors.xlsx'
        );
        $response->headers->set('Content-Disposition', $disposition);
        $response->headers->set('Content-Type', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        return $response;
    }
    #[Route('/export-excelb', name: 'app_sponsor_export_excelb')]
    public function exportExcelb(SponsorRepository $sponsorRepository)
    {
        $sponsors = $sponsorRepository->findAll();
        $headerRow = [
            'Nom du sponsor',
            'Montant',
            'Titre de l\'événement',
        ];
        $excelData = [];
        $excelData[] = $headerRow;
        foreach ($sponsors as $sponsor) {
            $excelData[] = [
                $sponsor->getNom(),
                $sponsor->getMontant(),
                $sponsor->getIdevenement()->getTitreevent(),
            ];
        }
        $spreadsheet = new \PhpOffice\PhpSpreadsheet\Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->fromArray($excelData, null, 'A1');
        $writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
        $response = new StreamedResponse(function () use ($writer) {
            $writer->save('php://output');
        });
        $disposition = $response->headers->makeDisposition(
            ResponseHeaderBag::DISPOSITION_ATTACHMENT,
            'sponsors.xlsx'
        );
        $response->headers->set('Content-Disposition', $disposition);
        $response->headers->set('Content-Type', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        return $response;
    }
    
    #[Route('/', name: 'app_sponsor_index', methods: ['GET'])]
    public function index(Request $request,SponsorRepository $sponsorRepository,PaginatorInterface $paginator): Response
    {
        $sponsors= $sponsorRepository->findAll();
        
        $sponsorPaginated = $paginator->paginate(
            $sponsors, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            2/*limit per page*/
        );
        return $this->render('sponsor/index.html.twig', [
            'sponsors' => $sponsorPaginated,
        ]);
    }
    #[Route('/list', name: 'app_sponsor_list', methods: ['GET'])]
    public function list(SponsorRepository $sponsorRepository): Response
    {
        return $this->render('sponsor/list.html.twig', [
            'sponsors' =>$sponsorRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_sponsor_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $sponsor = new Sponsor();
        $form = $this->createForm(SponsorType::class, $sponsor);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($sponsor);
            $entityManager->flush();

            return $this->redirectToRoute('app_sponsor_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('sponsor/new.html.twig', [
            'sponsor' => $sponsor,
            'form' => $form,
        ]);
    }
    #[Route('/newb', name: 'app_sponsor_newb', methods: ['GET', 'POST'])]
    public function newb(Request $request, EntityManagerInterface $entityManager): Response
    {
        $sponsor = new Sponsor();
        $form = $this->createForm(SponsorType::class, $sponsor);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($sponsor);
            $entityManager->flush();

            return $this->redirectToRoute('app_sponsor_list', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('sponsor/newb.html.twig', [
            'sponsor' => $sponsor,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_sponsor_show', methods: ['GET'])]
    public function show(Sponsor $sponsor): Response
    {
        return $this->render('sponsor/show.html.twig', [
            'sponsor' => $sponsor,
        ]);
    }
    #[Route('/{id}', name: 'app_sponsor_show', methods: ['GET'])]
    public function showb(Sponsor $sponsor): Response
    {
        return $this->render('sponsor/showb.html.twig', [
            'sponsor' => $sponsor,
        ]);
    }
  
    #[Route('/{id}/edit', name: 'app_sponsor_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Sponsor $sponsor, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(SponsorType::class, $sponsor);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_sponsor_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('sponsor/edit.html.twig', [
            'sponsor' => $sponsor,
            'form' => $form,
        ]);
    }
    #[Route('/{id}/editb', name: 'app_sponsor_editb', methods: ['GET', 'POST'])]
    public function editb(Request $request, Sponsor $sponsor, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(SponsorType::class, $sponsor);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_sponsor_list', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('sponsor/editb.html.twig', [
            'sponsor' => $sponsor,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_sponsor_delete', methods: ['POST'])]
    public function delete(Request $request, Sponsor $sponsor, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$sponsor->getId(), $request->request->get('_token'))) {
            $entityManager->remove($sponsor);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_sponsor_index', [], Response::HTTP_SEE_OTHER);
    }
    #[Route('/{id}', name: 'app_sponsor_deleteb', methods: ['POST'])]
    public function deleteb(Request $request, Sponsor $sponsor, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('deleteb'.$sponsor->getId(), $request->request->get('_token'))) {
            $entityManager->remove($sponsor);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_sponsor_list', [], Response::HTTP_SEE_OTHER);
    }
    
}
