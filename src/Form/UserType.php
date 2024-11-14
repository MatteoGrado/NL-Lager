<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;

class UserType extends AbstractType {
    public function buildForm(FormBuilderInterface $builder, array $options): void {
        $builder
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