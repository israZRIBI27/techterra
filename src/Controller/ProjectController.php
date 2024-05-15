<?php

namespace App\Controller;

use App\Entity\Project;
use App\Form\ProjectType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Doctrine\Persistence\ManagerRegistry;
use Knp\Component\Pager\PaginatorInterface;
use App\Repository\ProjectRepository;
use App\Service\PdfService;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;

class ProjectController extends AbstractController
{

    #[Route('/', name: 'app_project_index', methods: ['GET'])]
    public function index(Request  $request, ProjectRepository  $repository,PaginatorInterface $paginator): Response
    {$query = $request->query->get('q');
    
        // Récupérer les produits filtrés par nom (si un terme de recherche est fourni)
        if ($query) {
            $projects = $repository->findBySearchQuery($query); // À implémenter dans ProductRepository
        } else {
            $projects = $repository->findAll();
        }
        $projects = $paginator->paginate(
            $projects, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            2/*limit per page*/
        );
        return $this->render('project/index.html.twig', [
            'projects' => $projects,
        ]);
    }
    #[Route('/list', name: 'app_project_list', methods: ['GET'])]
    public function list(Request  $request, ProjectRepository  $repository,PaginatorInterface $paginator): Response
    { $query = $request->query->get('q');
        // Récupérer les produits filtrés par nom (si un terme de recherche est fourni)
        if ($query) {
            $projects = $repository->findBySearchQuery($query); // À implémenter dans ProductRepository
        } else {
            $projects = $repository->findAll();
        }
        $projects = $paginator->paginate(
            $projects, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            3/*limit per page*/
        );
        return $this->render('project/list.html.twig', [
            'projects' => $projects,
        ]);
    }
    #[Route('/new', name: 'app_project_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ManagerRegistry $doctrine): Response
    {
        $em=$doctrine->getManager();
        $project = new Project();
        $form = $this->createForm(ProjectType::class, $project);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $projetFich = $form->get('projet_fich')->getData();
            if ($projetFich) {
                $uploads=$this->getParameter('kernel.project_dir').'/public/Uploads';
                $fileName = md5(uniqid()) . '.' . $projetFich->guessExtension();
                $projetFich->move(
                   $uploads,
                    $fileName
                );
                $project->setProjetFich($fileName); // Stockez le chemin correct du fichier dans votre entité Project
            }
    
            $em->persist($project);
            $em->flush();
    
            return $this->redirectToRoute('app_project_index', [], Response::HTTP_SEE_OTHER);
        }
    
        return $this->render('project/new.html.twig', [
            'project' => $project,
            'form' => $form->createView(),
        ]);
    }
    
    
    #[Route('/newb', name: 'app_project_newb', methods: ['GET', 'POST'])]
    public function newb(Request $request, ManagerRegistry $doctrine): Response
    { 
         $em=$doctrine->getManager();
        $project = new Project();
        $form = $this->createForm(ProjectType::class, $project);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $projetFich = $form->get('projet_fich')->getData();
            if ($projetFich) {
                $uploads=$this->getParameter('kernel.project_dir').'/public/Uploads';
                $fileName = md5(uniqid()) . '.' . $projetFich->guessExtension();
                $projetFich->move(
                   $uploads,
                    $fileName
                );
                $project->setProjetFich($fileName); // Stockez le chemin correct du fichier dans votre entité Project
            }
    
            $em->persist($project);
            $em->flush();

            return $this->redirectToRoute('app_project_list', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('project/newb.html.twig', [
            'project' => $project,
            'form' => $form->createView(),
        ]);
    }
    #[Route('/{id}/show', name: 'app_project_show', methods: ['GET'])]
    public function show(Project $project): Response
    {
        return $this->render('project/show.html.twig', [
            'project' => $project,
        ]);
    }
    #[Route('/{id}/showb', name: 'app_project_showb', methods: ['GET'])]
    public function showb(Project $project): Response
    {
        return $this->render('project/showb.html.twig', [
            'project' => $project,
        ]);
    }



    #[Route('/{id}/edit', name: 'app_project_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Project $project, EntityManagerInterface $entityManager): Response
    {
        // Get the current file path
        $currentFilePath = $project->getProjetFich();
        // For updating a project
$form = $this->createForm(ProjectType::class, $project, [
    'disable_projet_fich' => true,
]);
        
        // If there is a current file path, set it as the data for the file upload field
        if ($currentFilePath) {
            $project->setProjetFich(new File($this->getParameter('kernel.project_dir') . '/public/Uploads/' . $currentFilePath));
        }
    
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            // Process the form submission and handle the file upload if a new file is selected
    
            // Check if a new file is uploaded
            $newFile = $form->get('projet_fich')->getData();
            if ($newFile instanceof File) {
                // Process the new file upload
                $uploads = $this->getParameter('kernel.project_dir') . '/public/Uploads';
                $fileName = md5(uniqid()) . '.' . $newFile->guessExtension();
                $newFile->move($uploads, $fileName);
                $project->setProjetFich($fileName);
            }
    
            // No need to persist the project entity here, as it's already managed by Doctrine
            $entityManager->flush();
            
            // Handle the response based on the request type (AJAX or non-AJAX)
    
            return $this->redirectToRoute('app_project_index');
        }
    
        return $this->renderForm('project/edit.html.twig', [
            'project' => $project,
            'form' => $form,
        ]);
    }
    
    
    #[Route('/{id}/editb', name: 'app_project_editb', methods: ['GET', 'POST'])]
    public function editb(Request $request, Project $project, EntityManagerInterface $entityManager): Response
    {
       // For updating a project
        $form = $this->createForm(ProjectType::class, $project, [
            'disable_projet_fich' => true,
        ]); 
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_project_list', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('project/editb.html.twig', [
            'project' => $project,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_project_delete', methods: ['POST'])]
    public function delete(Request $request, Project $project, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$project->getId(), $request->request->get('_token'))) {
            $entityManager->remove($project);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_project_index', [], Response::HTTP_SEE_OTHER);
    }
    #[Route('/{id}/deleteb', name: 'app_project_deleteb', methods: ['POST'])]
    public function deleteb(Request $request, Project $project, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$project->getId(), $request->request->get('_token'))) {
            $entityManager->remove($project);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_project_list', [], Response::HTTP_SEE_OTHER);
    }

  #[Route('/search', name: 'search_projects', methods: ['GET'])]
public function searchProjects(Request $request, ProjectRepository $projectRepository): Response
{
    $query = $request->query->get('query');

    // Perform the search in the database
    $projects = $projectRepository->search($query);

    // Return the search results
    $data = ['projects' => $projects];

    return $this->json($data);
}


#[Route('/pdf', name: 'app_project_pdf')]
public function generatePdf(Request $request, PdfService $pdf)
{
    $projectId = $request->query->get('id');

    if ($projectId === null) {
        throw new \Exception('Project ID not found in the URL');
    }

    $entityManager = $this->getDoctrine()->getManager();
    $project = $entityManager->getRepository(Project::class)->find($projectId);

    if ($project === null) {
        throw $this->createNotFoundException('Project not found');
    }

    $html = $this->renderView('Project/showPdf.html.twig', [
        'project' => $project,
    ]);

    $pdfContent = $pdf->generatePdfFile($html);

    if ($pdfContent === null) {
        throw new \Exception('PDF generation failed');
    }

    $response = new Response($pdfContent);

    if ($response === null) {
        throw new \Exception('Response creation failed');
    }

    $disposition = $response->headers->makeDisposition(
        ResponseHeaderBag::DISPOSITION_ATTACHMENT,
        'Project.pdf'
    );

    $response->headers->set('Content-Disposition', $disposition);

    return $response;
}


   
}