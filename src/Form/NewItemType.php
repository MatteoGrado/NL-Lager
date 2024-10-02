<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class NewItemType extends AbstractType {
    public function buildForm(FormBuilderInterface $builder, array $options): void {
        $builder
            ->add('Product-id',
            TextType::class,
            ['label' => 'Produkt-ID:',
                'attr' => ['class' => 'form-control',
                    'readonly' => true,
                    'required' => false,
                    'placeholder' => 'Produkt-ID',
                ]]
            )
            ->add('Product-name',
            TextType::class,
            ['label' => 'Produkt-Name:',
                'attr' => ['class' => 'form-control',
                    'required' => false
                ]]
            )
            ->add('Preis',
            TextType::class,
            ['label' => 'Preis:',
                'attr' => ['class' => 'form-control',
                    'required' => false
                ]]
            )
            ->add('Verkaufer',
            TextType::class,
                ['label' => 'Verkauf:',
                    'attr' => ['class' => 'form-control',
                    'required' => false
                ]]
            )
            ->add('Eintragen',
            SubmitType::class,
                ['label' => 'Eintragen',
                    'attr' => ['class' => 'btn-primary',
                ]]
            )
        ;
    }
}