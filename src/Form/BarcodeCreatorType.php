<?php

namespace App\Form;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormTypeInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;

class BarcodeCreatorType extends AbstractType {
    public function buildForm(FormBuilderInterface $builder, array $options): void {
        $builder
            ->add('Product_ID',
            TextType::class,
            ['label' => 'Product ID',
            'attr' => ['class' => 'product-ID']
            ])
            ->add('Product_Name',
            TextType::class,
            ['label' => 'Product Name',
            'attr' => ['class' => 'product-Name']
            ])
            ->add('Product_Description',
            TextType::class,
            ['label' => 'Product Beschreibung',
            'attr' => ['class' => 'product-description']
            ])
            ->add('Barcode-Type',
                ChoiceType::class, [
                'label' => 'Barcode Type',
                'choices' => [
                    'Code-128' => 'Code-128',
                    'EAN' => 'EAN',
                    'UPC' => 'UPC',
                    'ITF' => 'ITF',
                ],
            ])
            ->add('Create',
            SubmitType::class,
            ['attr' => ['class' => 'create-button']
            ])
        ;
    }
}