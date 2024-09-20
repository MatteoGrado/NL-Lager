<?php

namespace App\Controller;

use App\Form\DashboardFormType;
use App\Repository\ItemRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DashboardController extends AbstractController {
    #[Route('/dashboard', name: 'dashboard')]
    public function dashboard(ItemRepository $itemRepository, Request $request): Response {
        $form = $this->createForm(DashboardFormType::class);
        $form->handleRequest($request);

        $result = $itemRepository->findAll();



        return $this->render('dashboard/dashboard.html.twig', [
            'form' => $form,
        ]);
    }
}
