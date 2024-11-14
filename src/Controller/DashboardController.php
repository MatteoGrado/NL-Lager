<?php

namespace App\Controller;

use App\Entity\Item;
use App\Form\DashboardFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DashboardController extends AbstractController {
    #[Route('/dashboard', name: 'dashboard')]
    public function dashboard(Request $request, EntityManagerInterface $entityManager): Response {
        $form = $this->createForm(DashboardFormType::class);
        $form->handleRequest($request);

        $items = $entityManager->getRepository(Item::class)->findAll();

        return $this->render('dashboard/dashboard.html.twig', [
            'items' => $items,
            'form' => $form
        ]);
    }
}