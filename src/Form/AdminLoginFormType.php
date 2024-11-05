<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class AdminLoginFormType extends AbstractType {
    public function buildForm(FormBuilderInterface $builder, array $options): void {
        $builder
            ->add('username',
                TextType::class, [
                    'label' => 'Benutzername:',
                    'attr' => ['class' => 'form-control'],
                    'required' => true,
                ]
            )
            ->add('password',
                PasswordType::class, [
                    'label' => 'Passwort:',
                    'attr' => ['class' => 'form-control'],
                    'required' => true
                ]
            )
            ->add('submit',
                SubmitType::class, [
                    'label' => 'Anmelden',
                    'attr' => ['class' => 'btn btn-primary']
                ]
            )
        ;
    }
}