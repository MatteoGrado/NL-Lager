<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class NewUserController extends AbstractController {
    #[Route('/new/user', name: 'newUser')]
    public function newUser(): Response {
        //

        return $this->render('new_user/newUser.html.twig');
    }
}
