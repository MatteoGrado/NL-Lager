<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class AdminDashboardFormType extends AbstractType {
    public function buildForm(FormBuilderInterface $builder, array $options): void {
        $builder
            ->add('search', TextType::class, [
                'required' => false,
                'attr' => ['class' => 'search-bar',
                    'placeholder' => 'Suchen...']
            ])
            ->add('mark', SubmitType::class, [
                'label' => 'Alle Markieren',
                'attr' => ['class' => 'btn btn-primary']
            ])
            ->add('newUser', SubmitType::class, [
                'label' => 'Neuer Benutzer',
                'attr' => ['class' => 'btn btn-primary']
            ])
            ->add('logout', SubmitType::class, [
                'label' => '🚪 Ausloggen',
                'attr' => ['class' => 'btn btn-primary']
            ])
            ->add('edit', SubmitType::class, [
                'label' => 'Bearbeiten',
                'attr' => ['class' => 'edit-btn']
            ])
            ->add('delete', SubmitType::class, [
                'label' => 'Löschen',
                'attr' => ['class' => 'delete-btn']
            ])
        ;
    }
}