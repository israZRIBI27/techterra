<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\PaymentType;
use Stripe\StripeClient;
use Twilio\Rest\Client;
use Stripe\Exception\ApiErrorException;
use App\Entity\Panier;


class PayementController extends AbstractController
{
    #[Route('/payement', name: 'app_payement')]
    public function index(): Response
    {
        return $this->render('payement/index.html.twig', [
            'controller_name' => 'PayementController',
        ]);
    }

    #[Route('/pay', name: 'app_pay')]
    public function pay(Request $request): Response
    {
        // Retrieve the panier items from the database
        $entityManager = $this->getDoctrine()->getManager();
        $paniers = $entityManager->getRepository(Panier::class)->findAll();

        // Calculate the total price of all panier items
        $totalPrice = 0;
        foreach ($paniers as $panier) {
            $totalPrice += ($panier->getPrice() * $panier->getQuantite());
        }

        // Create a payment form (assuming you have a PaymentType form)
        $form = $this->createForm(PaymentType::class);

        // Handle form submission
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            // Get payment data from the form
            $paymentData = $form->getData();
    
            // Process payment with Stripe
            $stripe = new \Stripe\StripeClient('sk_test_51OpgKtKaFg9ThG7d3eHtOm8m5IfyAb4HZJkVSaYf8KbCEXVroaAQxtSe1PaWMCpvNV3Fv7Zk4CCullcooR9LfsUn00OKDiwuxB');
    
            try {
                // Create a charge with Stripe using the total price
                $charge = $stripe->charges->create([
                    'amount' => $totalPrice * 100, // Amount in cents (e.g., $10.00 = 1000 cents)
                    'currency' => 'usd',
                    'source' => $paymentData['cardNumber'], // Card number from the form
                    'description' => 'Payment for order', // Description of the payment
                ]);
    
                // Redirect to the payment confirmation page upon successful payment
                return $this->redirectToRoute('app_paymentConfirmation');
            } catch (\Stripe\Exception\ApiErrorException $e) {
                // Handle Stripe API errors
                $this->addFlash('error', 'Payment error: ' . $e->getMessage());
                return $this->redirectToRoute('app_paymentConfirmation');
            } catch (\Exception $e) {
                // Handle other exceptions
                $this->addFlash('error', 'An error occurred during payment.');
                return $this->redirectToRoute('app_paymentConfirmation');
            }
        }
    
        // Render the payment form with the total price
        return $this->render('payement/pay.html.twig', [
            'paymentForm' => $form->createView(),
            'totalPrice' => $totalPrice, // Pass the total price to the template
        ]);
    }

    #[Route('/paymentConfirmation', name: 'app_paymentConfirmation')]
    public function paymentConfirmation(): Response
    {   
        // Render the payment confirmation page
        return $this->render('payement/thankyou.html.twig');
    }
}
