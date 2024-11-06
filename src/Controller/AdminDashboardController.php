<?php

namespace App\Controller;

use App\Form\AdminDashboardFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AdminDashboardController extends AbstractController {
    #[Route('/admin/dashboard', name: 'adminDashboard')]
    public function adminDashboard(Request $request, ): Response {
        $form = $this->createForm(AdminDashboardFormType::class);
        $form->handleRequest($request);

        //

        return $this->render('admin_dashboard/admin_dashboard.html.twig', [
            'form' => $form
        ]);
    }
}