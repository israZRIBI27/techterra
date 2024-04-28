<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use App\Form\AddProductType;
use App\Entity\Product;
use App\Repository\ProductRepository;
use Knp\Component\Pager\PaginatorInterface;
use App\Repository\PanierRepository;


use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class ProductController extends AbstractController
{
    #[Route('/product', name: 'app_product')]
    public function index(): Response
    {
        return $this->render('product/index.html.twig', [
            'controller_name' => 'ProductController',
        ]);
    }

    #[Route('/Product/form', name: 'Product_add')]
    public function AddProduct(ManagerRegistry $doctrine, Request $request): Response
    {
        $product = new Product();
        $form = $this->createForm(AddProductType::class, $product);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            // Handle image upload
            $imageFile = $form->get('image')->getData();
    
            if ($imageFile) {
                // Use a unique name for the image to prevent conflicts
                $newFilename = uniqid().'.'.$imageFile->guessExtension();
    
                try {
                    // Move the uploaded file to a directory where images are stored
                    $imageFile->move(
                        $this->getParameter('images_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // Handle file upload error
                    // You might want to log the error or show a flash message to the user
                    $this->addFlash('error', 'An error occurred while uploading the image.');
                    return $this->redirectToRoute('Product_add');
                }
    
                // Set the image property of the product entity to the new filename
                $product->setImage($newFilename);
            }
    
            // Persist the product entity
            $em = $doctrine->getManager();
            $em->persist($product);
            $em->flush();
    
            // Redirect to the product show page after successful submission
            return $this->redirectToRoute('Product_show_admin');
        }
    
        // Render the form template with the form view
        return $this->render('Product/form.html.twig', [
            'formA' => $form->createView(),
        ]);
    }

    public function productList(): Response
    {
        // Retrieve products from the database (replace with your logic)
        $products = $this->getDoctrine()->getRepository(Product::class)->findAll();

        // Perform currency conversion (divide prices by 3.3 for demonstration)
        foreach ($products as $product) {
            $product->setPrice($product->getPrice() / 3.3);
        }

        // Render the template with the converted prices
        return $this->render('product/listProductC.html.twig', [
            'products' => $products,
        ]);
    }

    


    #[Route('/Product/show', name: 'Product_show')]
    public function show(ProductRepository $rep, Request $request, PaginatorInterface $paginator, PanierRepository $panierRepository): Response
    {
        $query = $request->query->get('q');

        // Récupérer les produits filtrés par nom (si un terme de recherche est fourni)
        if ($query) {
            $products = $rep->findBySearchQuery($query); // À implémenter dans ProductRepository
        } else {
            $products = $rep->findAll();
        }

        // Pagination des produits
        $products = $paginator->paginate(
            $products,
            $request->query->getInt('page', 1),
            2
        );

        // Vérifier si le panier contient des éléments
        $paniers = $panierRepository->findAll();
        $panierNonVide = count($paniers) > 0;

        return $this->render('Product/listProductC.html.twig', [
            'Products' => $products,
            'panierNonVide' => $panierNonVide,
        ]);
    }



        #[Route('/Product/delete/{id}', name: 'Product_delete')]
     public function deleteProduct($id, ProductRepository $rep, ManagerRegistry $doctrine): Response
     {
         $em= $doctrine->getManager();
         $Product= $rep->find($id);
         $em->remove($Product);
         $em->flush();
         return $this-> redirectToRoute('Product_show');
     }


     #[Route('/Product/update/{id}', name: 'Product_update')]
     public function UpdateProduct(ManagerRegistry $doctrine, Request $request, ProductRepository $rep, $id): Response
     {
        $Product = $rep->find($id);
        $form=$this->createForm(AddProductType::class,$Product);
        $form->handleRequest($request);
        if($form->isSubmitted()){
            $em= $doctrine->getManager();
            $em->persist($Product);
            $em->flush();
            return $this-> redirectToRoute('Product_show');
        }
        return $this->render('Product/form.html.twig',[
            'formA'=>$form->createView(),
        ]);
     }

    











}




