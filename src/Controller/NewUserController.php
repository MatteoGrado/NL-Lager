<?php

namespace App\Controller;

use App\Form\NewUserFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\User;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class NewUserController extends AbstractController {
    #[Route('/new/user', name: 'newUser')]
    public function newUser(Request $request, EntityManagerInterface $entityManager): Response {
        $user = new User();
        $form = $this->createForm(NewUserFormType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            $user->setFirstname($data['firstname']);
            $user->setLastname($data['lastname']);
            $user->setUsername($data['username']);
            $user->setPassword(password_hash($data['password'], PASSWORD_DEFAULT));
            $user->setRoles($data['role']);
            $user->setemail($data['email']);

            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('adminDashboard');
        }

        return $this->render('new_user/newUser.html.twig', [
            'form' => $form,
        ]);
    }
}