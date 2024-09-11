<?php

namespace App\Controller;

use App\Entity\Item;
use App\Form\BarcodeCreatorType;
use App\Repository\ItemRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class BarcodeGeneratorController extends AbstractController {
    #[Route('/generator', name: 'generator')]
    public function index(Request $request, ItemRepository $itemRepository): Response {
        $form = $this->createForm(BarcodeCreatorType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

        }

        return $this->render('barcode_generator/generator.html.twig', [
            'form' => $form->createView()
        ]);
    }
}