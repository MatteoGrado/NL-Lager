<?php

namespace App\Controller;

use App\Form\BarcodeCreatorType;
use App\Repository\ItemRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class BarcodeGeneratorController extends AbstractController {
    #[Route('/generator', name: 'generator')]
    public function index(Request $request, ItemRepository $itemRepository): Response {
        $product_name = null;

        $form = $this->createForm(BarcodeCreatorType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $formData = $form->getData();

            $product_id = $formData['product_id'];
            $product = $itemRepository->find($product_id);

            if ($product) {
                $product_name = $product->getProductName();
            } else {
                throw $this->createNotFoundException('Product not found!');
            }
        }

        return $this->render('barcode_generator/generator.html.twig', [
            'product_name' => $product_name,
            'form' => $form->createView()
        ]);
    }
}