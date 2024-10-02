<?php

namespace App\Controller;

use App\Form\BarcodeCreatorType;
use App\Repository\ItemRepository;
use Doctrine\ORM\EntityManagerInterface;
use Picqer\Barcode\BarcodeGenerator;
use Picqer\Barcode\BarcodeGeneratorJPG;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class BarcodeGeneratorController extends AbstractController {
    #[Route('/generator', name: 'barcode_generator')]
    public function show(Request $request, EntityManagerInterface $entityManager, ItemRepository $itemRepository): Response {
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
                return $this->redirectToRoute('NewItem');
            }

            $barcode = new BarcodeGeneratorJPG();

            $barcodeData = sprintf('%s|%s', $id, $product_name);
            $barcode_type = $formData['Barcode-Type'];

            switch ($barcode_type) {
                case 'Code_128':
                    $barcodeType = BarcodeGenerator::TYPE_CODE_128;
                    break;
                case 'EAN':
                    $barcode_type = BarcodeGenerator::TYPE_EAN_8;
                    break;
                case 'UPC':
                    $barcode_type = BarcodeGenerator::TYPE_UPC_A;
                    break;
                case 'ITF':
                    $barcode_type = BarcodeGenerator::TYPE_ITF_14;
                    break;
                default:
                    $barcode_type = BarcodeGenerator::TYPE_CODE_128;
                    break;
            }

            /*
            TODO:
                - Show the jpg in the template
                - Find a printer package
                - Give print button a function
                - foreach btn.press make a new step in the story file format it in json
            */

            $barcodeImage = $barcode->getBarcode($barcodeData, $barcode_type);
            $barcodeDIR = $this->getParameter('kernel.project_dir') . '/public/barcodes/';
            $barcodeFilename = $barcodeDIR . 'barcode_' . $id . '.jpg';

            if (!is_dir($barcodeDIR)) {
                mkdir($barcodeDIR, 0777, true);
            }

            file_put_contents($barcodeFilename, $barcodeImage);
            $barcodeUrl = '/public/barcodes/barcode_' . $id . '.jpg';
        }

        return $this->render('barcode_generator/generator.html.twig', [
            'product_name' => $product_name,
            'barcode_url' => $barcodeUrl ?? null,
            'form' => $form
        ]);
    }
}