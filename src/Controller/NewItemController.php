<?php

namespace App\Controller;

use App\Entity\Item;
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
            $product_stock = $formData['product_stock'];
            $product_price = $formData['price'];
            $product_seller = $formData['seller'];

            if (!$itemRepository->findOneBy(['product_name' => $product_name]) == $formData['product_name']) {
                $item = new Item();

                $item->setProductName($product_name);
                $item->setProductStock($product_stock);
                $item->setProductCost($product_price);
                $item->setProductSeller($product_seller);

                $entityManager->persist($item);
                $entityManager->flush();

                $this->addFlash('success', 'Der Artikel wurde erfolgreich hinzugefügt!');
            } else {
                throw $this->createNotFoundException('Das Produkt ist bereits vorhanden!');
            }
        }
        return $this->render('new_item/newItem.html.twig', [
            'form' => $form
        ]);
    }
}