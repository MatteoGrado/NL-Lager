<?php

namespace App\Controller;

use App\Form\NewItemType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class NewItemController extends AbstractController {
    #[Route('/new/item', name: 'NewItem')]
    public function generateInput(Request $request, EntityManagerInterface $entityManager): Response {
        $form = $this->createForm(NewItemType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $item = $form->getData();


        }
        return $this->render('new_item/newItem.html.twig', [
            'form' => $form
        ]);
    }
}
