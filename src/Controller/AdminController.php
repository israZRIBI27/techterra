<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Product;
use App\Repository\ProductRepository;

class AdminController extends AbstractController
{
    #[Route('/admin', name: 'app_admin')]
    public function index(): Response
    {
        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }

    #[Route('/admin/product/Productlist ', name: 'Product_show_admin')]
	    public function show(ProductRepository $rep): Response
	    {
	        $Products = $rep->findAll();
	        return $this->render('admin/product/Productlist.html.twig', ['Products'=>$Products]);
	    }
}
