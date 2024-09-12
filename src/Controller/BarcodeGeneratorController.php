<?php

namespace App\Controller;

use App\Form\BarcodeCreatorType;
use App\Repository\ItemRepository;
use Picqer\Barcode\BarcodeGenerator;
use Picqer\Barcode\BarcodeGeneratorJPG;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class BarcodeGeneratorController extends AbstractController {
    #[Route('/generator', name: 'barcode_generator')]
    public function show(Request $request, ItemRepository $itemRepository): Response {
        $product_name = null;

        $form = $this->createForm(BarcodeCreatorType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $formData = $form->getData();

            $id = $formData['id'];
            $product = $itemRepository->find($id);

            if ($product) {
                $product_name = $product->getProductName();
            } else {
                throw $this->createNotFoundException('Product not found!');
            }

            $barcode = new BarcodeGeneratorJPG();

            $barcodeData = sprintf('%s|%s', $id, $product_name);
            $barcode_type = $formData['Barcode-Type'];

            switch ($barcode_type) {
                case 'TYPE_CODE_128':
                    $barcodeType = BarcodeGenerator::TYPE_CODE_128;
                    break;
                case 'TYPE_EAN_8':
                    $barcode_type = BarcodeGenerator::TYPE_EAN_8;
                    break;
                case 'TYPE_UPC_A':
                    $barcode_type = BarcodeGenerator::TYPE_UPC_A;
                    break;
                case 'TYPE_ITF_14':
                    $barcode_type = BarcodeGenerator::TYPE_ITF_14;
                    break;
                default:
                    $barcode_type = BarcodeGenerator::TYPE_CODE_128;
                    break;
            }

            $barcodeImage = $barcode->getBarcode($barcodeData, $barcode_type);
            $response = new Response($barcodeImage);
            $response->headers->set('Content-Type', 'image/jpeg');

            return $response;

        }

        return $this->render('barcode_generator/generator.html.twig', [
            'product_name' => $product_name,
            'form' => $form
        ]);
    }
}