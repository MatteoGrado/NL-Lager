<?php

namespace App\Controller;

use App\Form\AdminLoginFormType;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AdminController extends AbstractController {
    #[Route('/admin', name: 'login')]
    public function adminLogin(Request $request, UserRepository $userRepository): Response {
        $form = $this->createForm(AdminLoginFormType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            $username = $data['username'];
            $password = $data['password'];

            $user = $userRepository->findOneBy(['username' => $username]);
            if (!$user && password_verify($password, $user->getPassword())) {
                $this->addFlash('error', 'Invalid username or password');
                return $this->redirectToRoute('login');
            } else {
                $this->addFlash('success', 'Successfully logged in');
                return $this->redirectToRoute('adminDashboard');
            }
        }

        return $this->render('admin/admin.html.twig', [
            'form' => $form
        ]);
    }
}