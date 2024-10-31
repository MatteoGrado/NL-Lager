<?php

namespace App\Controller;

use App\Form\AdminLoginFormType;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AdminController extends AbstractController {
    #[Route('/admin', name: 'admin')]
    public function admin(Request $request, UserRepository $userRepository): Response {
        $form = $this->createForm(AdminLoginFormType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            $username = $data['username'];
            $password = $data['password'];
            $rememberMe = $data['remember-me'];

            $user = $userRepository->find($username);
            if ($user && password_verify($password, $userRepository->find($password))) {
                echo "Success";
            }

            return $this->redirectToRoute('admin_dashboard');
        }

        return $this->render('admin/admin.html.twig', [
            'form' => $form
        ]);
    }
}
