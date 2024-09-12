<?php

namespace App\Controller;

use App\Form\BarcodeReaderFormType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class BarcodeReaderController extends AbstractController {
    #[Route('/', name: 'access_point')]
    public function index(Request $request): Response {
        $form = $this->createForm(BarcodeReaderFormType::class);
        $form->handleRequest($request); // TODO Form Handling: https://symfony.com/doc/current/form/without_class.html

        if ($form->isSubmitted() && $form->isValid()) {
            $buttonClicked = $form->getClickedButton();

            if ($buttonClicked) {
                $btnName = $buttonClicked->getName();

                switch ($btnName) {
                    case 'Direkt_zum_Dashboard':
                        return $this->redirectToRoute('dashboard');
                        break;
                    case 'Barcode_Erstellen':
                        return $this->redirectToRoute('barcode_generator');
                        break;
                }
            }
        }
        return $this->render('barcode_reader/start.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}