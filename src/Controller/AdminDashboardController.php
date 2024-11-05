<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AdminDashboardController extends AbstractController {
    #[Route('/admin/dashboard', name: 'adminDashboard')]
    public function adminDashboard(): Response {
        // Get User Data from DB and return

        return $this->render('admin_dashboard/admin_dashboard.html.twig');
    }
}