<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class DashboardFormType extends AbstractType {
    public function buildForm(FormBuilderInterface $builder, array $options): void {
        $builder
            ->add('Jahre',
            ChoiceType::class, [
                'required' => false,
                    'choices' => [
                        '2023' => '2023',
                        '2024' => '2023',
                        '2025' => '2025',
                        '2026' => '2026',
                    ],
                    'attr' => ['class' => 'selector-years'],
                ]
            )
            ->add('Preis',
                TextType::class,
                ['label' => 'Preis',
                    'required' => false,
                    'attr' => ['class' => 'select-price'],
                ]
            )
            ->add('Menge',
                ChoiceType::class, [
                    'required' => false,
                    'choices' => [
                        '0-10' => '0-10',
                        '10-20' => '10-20',
                        '20-30' => '20-30',
                        '30-40' => '30-40',
                        '40-50' => '40-50',
                    ],
                    'attr' => ['class' => 'selector-stock'],
                ]
            )
        ;
    }
}