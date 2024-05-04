<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Panier;
use App\Repository\PanierRepository;
use App\Repository\ProductRepository;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;


use App\Entity\Product;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\GreaterThanOrEqual;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use App\Service\PdfService;
use Dompdf\Dompdf;


use Twilio\Rest\Client;


class PanierController extends AbstractController
{
    #[Route('/panier', name: 'app_panier')]
    public function index(): Response
    {
        return $this->render('panier/index.html.twig', [
            'controller_name' => 'PanierController',
        ]);
    }

    #[Route('/add_to_cart/{id}', name: 'add_to_cart')]
    public function addToCart(Request $request, Product $product, int $id, ProductRepository $productRepository): Response
    {
        // Get the quantity from the request
        $quantity = $request->request->getInt('quantity', 1);
        $productEntity = $productRepository->find($id);

    
        // Récupérer le panier de l'utilisateur depuis la session
        $cart = $request->getSession()->get('cart', []);
    
        $product = $productRepository->find($id);
    
        // Ajouter le produit au panier
        $cart[] = $product->getId();
    
        // Enregistrer le panier mis à jour dans la session
        $request->getSession()->set('cart', $cart);
    
        // Ajouter le produit au panier en base de données
        $entityManager = $this->getDoctrine()->getManager();
    
        // Créer une instance de l'entité Panier
        $panier = new Panier();
    
        // Définir les valeurs statiques pour id_user et quantite
        $panier->setIdUser(1);
        $panier->setQuantite($quantity);

        $newQuantity = $productEntity->getQuantity() - $quantity;
        if ($newQuantity < 0) {

            $this->addFlash('error', 'Insufficient quantity available for this product.');
    
            // Redirect back to the previous page or panier list
            return $this->redirectToRoute('Panier_show');        }
            // Update the product quantity in the database
        $productEntity->setQuantity($newQuantity);
    
        // Récupérer le prix du produit
        $prixProduit = $product->getPrice();
    
        // Calculer le prix total du panier
        $panierPrice = $prixProduit * $quantity;
    
        // Associer le prix, le produit et l'identifiant du produit au panier
        $panier->setPrice($panierPrice);
        $panier->setIdProduit($product); // Passer l'instance de l'entité Product
    
        // Enregistrer le panier en base de données
        $entityManager->persist($panier);
        $entityManager->flush();
    
        // Rediriger l'utilisateur vers une autre page, par exemple la liste des produits
        return $this->redirectToRoute('Panier_show');
    }
    

    #[Route('/Panier/show', name: 'Panier_show')]
    public function show(PanierRepository $rep): Response
    {
        $paniers = $rep->findAll();
        return $this->render('Panier/Panierlist.html.twig', ['paniers' => $paniers]);

        
    }

    


    #[Route('/Panier/delete/{id}', name: 'Panier_delete')]
    public function deletePanier($id, PanierRepository $rep, ManagerRegistry $doctrine): Response
    {
        $em= $doctrine->getManager();
        $Panier= $rep->find($id);
        $em->remove($Panier);
        $em->flush();
        return $this-> redirectToRoute('Panier_show');
    }

    #[Route('/sendSms', name: 'send_sms', methods:['POST'])]
public function sendSms(Request $request): Response
{
    // Get data from request
    $number = $request->request->get('number'); // Manually input recipient's phone number

    // Fetch the paniers from the database
    $paniers = $this->getDoctrine()->getRepository(Panier::class)->findAll();

    // Calculate total price
    $totalPrice = 0;
    foreach ($paniers as $panier) {
        $totalPrice += ($panier->getPrice()) * ($panier->getQuantite());
    }

    // Validate $number
    if (empty($number)) {
        // Handle the error, e.g., return a response indicating the phone number is required
        return new Response('Recipient phone number is required', Response::HTTP_BAD_REQUEST);
    }

    // Get Twilio credentials from environment variables
    $accountSid = $_ENV['TWILIO_ACCOUNT_SID'];
    $authToken = $_ENV['TWILIO_AUTH_TOKEN'];
    $fromNumber = $_ENV['TWILIO_PHONE_NUMBER'];

    // Construct SMS message using the total price
    $message = "Your total order price is: $totalPrice";

    // Initialize Twilio client
    $client = new Client($accountSid, $authToken);

    try {
        // Send SMS
        $client->messages->create(
            $number, // Use manually input recipient's phone number
            [
                'from' => $fromNumber,
                'body' => $message,
            ]
        );

        // Return success response
        return $this->render('sms/index.html.twig', ['smsSent' => true]);

    } catch (\Exception $e) {
        // Log or handle the exception
        // For debugging purposes, you can also output the exception message
        echo 'Error: ' . $e->getMessage();

        // Return error response
        return new Response('Failed to send SMS', Response::HTTP_INTERNAL_SERVER_ERROR);
    }
}

#[Route('/chart/chart', name: 'panier_statistics')]
public function panierStatistics(PanierRepository $panierRepository): Response
{
    // Calculate Panier price statistics using custom repository method
    $statistics = $panierRepository->calculatePriceStatistics();

    return $this->render('chart/chart.html.twig', [
        'statistics' => $statistics,
    ]);
}

#[Route('/paniers', name: 'paniers')]
    public function paniers(PanierRepository $panierRepository): Response
    {
        // Get all paniers from the repository
        $paniers = $panierRepository->findAll();

        // Apply discount to paniers with price over 100
        foreach ($paniers as $panier) {
            if ($panier->getPrice() > 100) {
                $discountedPrice = $panier->getPrice() * 0.85; // 15% discount
                $panier->setPrice($discountedPrice);
            }
        }

        // Render the template with paniers data
        return $this->render('panier/paniers.html.twig', [
            'paniers' => $paniers,
        ]);
    }

    #[Route('/panier/pdf/', name: 'panier_pdf')]
public function generatePanierPdf(Panier $panier = null, PdfService $pdf)
{

    $panier = $this->getDoctrine()->getRepository(Panier::class)->findAll();
    dump($panier); // Dump the contents of $panier for debugging

    if (!$panier) {
        throw $this->createNotFoundException('Panier not found.');
    }

    // Get panier data and prepare for PDF generation
    $html = $this->renderView('panier/showPdf.html.twig', [
        'panier' => $panier,
    ]);


    // Generate PDF file content
    $pdfContent = $pdf->generatePdfFile($html);

    // Create HTTP response for the PDF file
    $response = new Response($pdfContent);

    // Set headers for file download
    $disposition = $response->headers->makeDisposition(
        ResponseHeaderBag::DISPOSITION_ATTACHMENT,
        'panier.pdf'
    );
    $response->headers->set('Content-Disposition', $disposition);

    return $response;
}




}



    

   



