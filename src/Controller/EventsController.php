<?php

namespace App\Controller;

use App\Entity\Events;
use App\Form\EventsType;
use App\Repository\EventsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use DateTime;
use GuzzleHttp\Client;

use Endroid\QrCode\Builder\Builder;
use Endroid\QrCode\Writer\PngWriter;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Endroid\QrCode\QrCode;
use Symfony\Component\Mime\Part\DataPart;
use Symfony\Component\HttpFoundation\File\File;
use Knp\Component\Pager\PaginatorInterface;



#[Route('/events')]
class EventsController extends AbstractController
{
   
    #[Route('/participate-event/{id}', name: 'participate_event')]
    public function participateEvent(Request $request, MailerInterface $mailer, EventsRepository $eventsRepository): Response
    {
        $eventId = $request->attributes->get('id');
        $event = $eventsRepository->find($eventId);
        if (!$event) {
            throw $this->createNotFoundException('Event not found');
        }
        $qrCodeContent = sprintf("Titre: %s\nDate: %s\nLieu: %s\nPrix: %s", 
            $event->getTitreevent(), 
            $event->getDate(), 
            $event->getLieu(), 
            $event->getPrix()
        );
        $qrCode = Builder::create()
            ->data($qrCodeContent)
            ->writer(new PngWriter())
            ->build();
        $tempFilePath = tempnam(sys_get_temp_dir(), 'qr_code');
        $qrCode->saveToFile($tempFilePath);
        $file = new File($tempFilePath);
    
        $email = (new Email())
            ->from('isra.zribi@esprit.tn')
            ->to('isra.zribi@esprit.tn')
            ->subject('Participation à l\'événement')
            ->text('Merci de participer à l\'événement : ' . $event->getTitreevent() . '!')
            ->attach(
                $file->getContent(), 
                'qr_code.png', 
                'image/png' 
            );
        $mailer->send($email);
        return $this->redirectToRoute('app_events_index');
    }


 /******************calendar*******************/
    #[Route('/indexmain', name: 'indewmain', methods: ['GET'])]
    public function indexmain(EventsRepository $EventsRepository): Response
    {
        $events = $EventsRepository->findAll();

        $rdvs = [];

        foreach ($events as $event) {
            $date1 = \DateTime::createFromFormat('Y-m-d', $event->getDate());
           
            if ($date1 === false) {
                continue;
            }
            $rdvs[] = [
                'id' => $event->getIdEvent(),
                'start' => $date1->format('Y-m-d'), // Format de date souhaité
                'title' => "event " . $event->getTitreevent()
            ];
        }

        $data = json_encode($rdvs);

        return $this->render('events/maincalander.html.twig', [
            'data' => $data,
            'new_event_route' => $this->generateUrl('app_events_new')
        ]);
    }
    #[Route('/indexmain2', name: 'indewmain2', methods: ['GET'])]
    public function indexmain2(EventsRepository $EventsRepository): Response
    {
        $events = $EventsRepository->findAll();

        $rdvs = [];

        foreach ($events as $event) {
            $date1 = \DateTime::createFromFormat('Y-m-d', $event->getDate());
           
            if ($date1 === false) {
                continue;
            }
            $rdvs[] = [
                'id' => $event->getIdEvent(),
                'start' => $date1->format('Y-m-d'), // Format de date souhaité
                'title' => "event " . $event->getTitreevent()
            ];
        }

        $data = json_encode($rdvs);

        return $this->render('events/maincalanderb.html.twig', [
            'data' => $data,
            'new_event_route' => $this->generateUrl('app_events_newb')
        ]);
    }

   
    #[Route('/', name: 'app_events_index', methods: ['GET'])]
public function index(Request $request, EventsRepository $eventsRepository, PaginatorInterface $paginator): Response
{      
    $dateSysteme = new \DateTime();
    $events = $eventsRepository->findAll();
            
    $eventsPaginated = $paginator->paginate(
        $events, /* query NOT result */
        $request->query->getInt('page', 1)/*page number*/,
        2/*limit per page*/
    );

    return $this->render('events/index.html.twig', [
        'events' => $eventsPaginated, // Utilisez la variable paginée ici
        'dateSysteme' => $dateSysteme,
    ]);  
}

    #[Route('/list', name: 'app_events_list', methods: ['GET'])]
    public function list(EventsRepository $eventsRepository): Response
    {
        return $this->render('events/list.html.twig', [
            'events' => $eventsRepository->findAll(),
        ]);
    }
    
    #[Route('/new', name: 'app_events_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
     $event = new Events();
     $date = $request->query->get('date');
     if ($date) {
         $event->setDate($date);
     }
     $form = $this->createForm(EventsType::class, $event);
     $form->handleRequest($request);
     if ($form->isSubmitted() && $form->isValid()) {
         $entityManager->persist($event);
         $entityManager->flush();
         return $this->redirectToRoute('app_events_index', [], Response::HTTP_SEE_OTHER);
     }
     return $this->renderForm('events/new.html.twig', [
         'event' => $event,
         'form' => $form,
     ]);
    }

    #[Route('/newb', name: 'app_events_newb', methods: ['GET', 'POST'])]
    public function newb(Request $request, EntityManagerInterface $entityManager): Response
    {
        $event = new Events();
        $form = $this->createForm(EventsType::class, $event);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($event);
            $entityManager->flush();

            return $this->redirectToRoute('app_events_list', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('events/newb.html.twig', [
            'event' => $event,
            'form' => $form,
        ]);
    }

    #[Route('/{idEvent}', name: 'app_events_show', methods: ['GET'])]
    public function show(Events $event): Response
    {
        return $this->render('events/show.html.twig', [
            'event' => $event,
        ]);
    }
    #[Route('/{idEvent}/showb', name: 'app_events_showb', methods: ['GET'])]
    public function showb(Events $event): Response
    {
        return $this->render('events/showb.html.twig', [
            'event' => $event,
        ]);
    }

    #[Route('/{idEvent}/edit', name: 'app_events_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Events $event, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(EventsType::class, $event);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            $this->sendWhatsAppNotification($event);
            return $this->redirectToRoute('app_events_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('events/edit.html.twig', [
            'event' => $event,
            'form' => $form,
        ]);
    }
    #[Route('/{idEvent}/editb', name: 'app_events_editb', methods: ['GET', 'POST'])]
    public function editb(Request $request, Events $event, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(EventsType::class, $event);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_events_list', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('events/editb.html.twig', [
            'event' => $event,
            'form' => $form,
        ]);
    }

    #[Route('/{idEvent}', name: 'app_events_delete', methods: ['POST'])]
    public function delete(Request $request, Events $event, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$event->getIdEvent(), $request->request->get('_token'))) {
            $entityManager->remove($event);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_events_index', [], Response::HTTP_SEE_OTHER);
    }
   
/*
    private function sendWhatsAppNotification(Events $event) {
        // Your phone number (replace this with your actual phone number)
        $phoneNumber = '21655588439';
    
        // Date de l'événement
        $eventDate = DateTime::createFromFormat('Y-m-d', $event->getDate());
        
        // Date actuelle
        $currentDate = new DateTime();
    
        // Date dans deux jours
        $twoDaysLater = (new DateTime())->modify('+2 days');
    
        // Vérifie si l'événement est dans les deux prochains jours
        if ($eventDate >= $currentDate && $eventDate <= $twoDaysLater) {
            // Appeler la fonction pour envoyer la notification WhatsApp
            $this->sendWhatsAppMessage($phoneNumber, $event);
        }
    }*/
    private function sendWhatsAppNotification(Events $event) {
        // Your phone number (replace this with your actual phone number)
        $phoneNumber = '+216 97 351 080';
    
        // Call the sendWhatsAppMessage method immediately
        $this->sendWhatsAppMessage($phoneNumber, $event);
    }
    
    private function sendWhatsAppMessage(string $phoneNumber, Events $event) {
        $client = new Client();
    
        $response = $client->request('POST', 'https://whin2.p.rapidapi.com/seturl', [
            'body' => json_encode([
                'phone_number' => $phoneNumber,
                'text' => 'Reminder: Event "' . $event->getTitreevent() . '" is in two days!'
            ]),
            'headers' => [
                
                'X-RapidAPI-Host' => 'whin2.p.rapidapi.com',
                'X-RapidAPI-Key' => 'f2c3fef997msh536d78acb857cf9p1ecec4jsn54320ab4f3a2',
                'content-type' => 'application/json',
            ],
        ]);
    
        // Traitement de la réponse si nécessaire
    }
    
    
}


