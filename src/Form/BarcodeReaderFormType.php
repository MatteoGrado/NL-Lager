<?php

namespace App\Form;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;

class BarcodeReaderFormType extends AbstractType {
    public function buildForm(FormBuilderInterface $builder, array $options): void {
        $builder
            ->add('Barcode_eingeben',
                TextType::class,
                ['label' => 'Barcode eingeben',
                'required' => false,
                'attr' => ['class' => 'inp1']
                ])
            ->add('Einlesen', SubmitType::class,
                ['label' => 'Einlesen',
                'attr' => ['class' => 'btn1']
                ])
            ->add('Direkt_zum_Dashboard', SubmitType::class,
                ['label' => 'Direkt zum Dashboard',
                'attr' => ['class' => 'btn2']
                ])
            ->add('Barcode_Erstellen', SubmitType::class,
                ['label' => 'Barcode Erstellen',
                'attr' => ['class' => 'btn3']
                ])
        ;
    }
}