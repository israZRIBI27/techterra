<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\UX\Chartjs\Builder\ChartBuilderInterface;
use Symfony\UX\Chartjs\Model\Chart;
use App\Repository\PanierRepository;

class ChartController extends AbstractController
{
    #[Route('/', name: 'app_homepage')]
   /* public function index(ChartBuilderInterface $chartBuilder, PanierRepository $panierRepository): Response
    {
        // Retrieve data from the PanierRepository to populate the chart
        $panierItems = $panierRepository->findAll(); // Retrieve all panier items (you may need to adjust this query based on your requirements)

        // Initialize arrays to store product labels and usage counts
        $productLabels = [];
        $productUsageCounts = [];

        // Count the usage of each product in the panier
        foreach ($panierItems as $panierItem) {
            $productName = $panierItem->getIdProduit()->getName(); // Assuming you have a relationship to the Product entity
            if (!isset($productUsageCounts[$productName])) {
                $productUsageCounts[$productName] = 0;
                $productLabels[] = $productName;
            }
            $productUsageCounts[$productName]++;
        }

        // Create a new Chart instance
        $chart = $chartBuilder->createChart(Chart::TYPE_BAR);

        // Set chart data using product labels and usage counts
        $chart->setData([
            'labels' => $productLabels,
            'datasets' => [
                [
                    'label' => 'Product Usage',
                    'backgroundColor' => 'rgb(54, 162, 235)',
                    'data' => array_values($productUsageCounts), // Usage counts for each product
                ],
            ],
        ]);

        // Set chart options
        $chart->setOptions([
            'scales' => [
                'y' => [
                    'suggestedMin' => 0,
                    'beginAtZero' => true,
                ],
            ],
            'responsive' => true,
            'plugins' => [
                'legend' => [
                    'position' => 'top',
                ],
            ],
        ]);

        // Render the view with the populated chart data
        return $this->render('chart/chart.html.twig', [
            'chart' => $chart,
        ]);
    }*/

    public function index(): Response
    {
       

        // Render the view with the populated chart data
        return $this->render('index.html.twig');
    }
}

