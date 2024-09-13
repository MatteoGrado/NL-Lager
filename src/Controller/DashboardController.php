<?php

namespace App\Controller;

use App\Entity\Item;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DashboardController extends AbstractController {
    #[Route('/dashboard', name: 'dashboard')]
    public function index(Item $item): Response {
        $item = new Item();

        $result = array
        ([
            'id' => $item->getId(),
            'product_name' => $item->getProductName(),
            'product_stock' => $item->getProductStock(),
            'product_cost' => $item->getProductCost(),
            'product_seller' => $item->getProductSeller(),
        ]);

        

        return $this->render('dashboard/dashboard.html.twig');
    }
}
