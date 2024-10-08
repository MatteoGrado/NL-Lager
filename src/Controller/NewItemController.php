<?php

namespace App\Controller;

use App\Form\NewItemType;
use App\Repository\ItemRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class NewItemController extends AbstractController {
    #[Route('/new/item', name: 'NewItem')]
    public function generateInput(Request $request, EntityManagerInterface $entityManager, ItemRepository $itemRepository): Response {
        $form = $this->createForm(NewItemType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $formData = $form->getData();

            $product_name = $formData['product_name'];
            $price = $formData['price'];
            $seller = $formData['seller'];

            if (!$itemRepository->find($product_name) === $formData['product_name']) {
                $entityManager->persist($formData);
                $entityManager->flush();

                $message = "Daten Erfolgreich gespeichert!";
                echo $message;
            } else {
                echo "Das Produkt gibt es Bereits!";
            }
        }
        return $this->render('new_item/newItem.html.twig', [
            'form' => $form
        ]);
    }
}
