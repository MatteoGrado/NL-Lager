<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\AdminDashboardFormType;
use App\Form\UserType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AdminDashboardController extends AbstractController {
    #[Route('/admin/dashboard', name: 'adminDashboard')]
    public function adminDashboard(Request $request, EntityManagerInterface $entityManager): Response {
        $form = $this->createForm(AdminDashboardFormType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $buttonClicked = $form->getClickedButton();

            if ($buttonClicked) {
                $btnName = $buttonClicked->getName();

                switch ($btnName) {
                    case 'newUser':
                        return $this->redirectToRoute('newUser');
                        break;
                    case 'logout':
                        return $this->redirectToRoute('');
                        break;
                    case 'edit':
                        return $this->redirectToRoute('');
                        break;
                    case 'delete':
                        // $entityManager->remove();
                        break;
                }
            }
        }
        $users = $entityManager->getRepository(User::class)->findAll();
        $forms = [];
        foreach ($users as $user) {
            $forms[$user->getId()] = $this->createForm(UserType::class, $user)->createView();
        }
        $roles = [];
        foreach ($users as $user) {
            $roles[$user->getId()] = $user->getRoles();
        }

        return $this->render('admin_dashboard/admin_dashboard.html.twig', [
            'roles' => $roles,
            'forms' => $forms,
            'users' => $users,
            'form' => $form
        ]);
    }
}