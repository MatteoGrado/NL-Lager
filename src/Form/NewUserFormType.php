<?php

namespace App\Form;

use Doctrine\DBAL\Types\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\SubmitButton;

class NewUserFormType extends AbstractType {
    public function buildForm(FormBuilderInterface $builder, array $options): void {
        $builder
            ->add('first-name',
                TextType::class,
                    ['label' => 'Vorname:',
                    'attr' => ['class' => 'form-control',
                    'required' => true,
                ]]
            )
            ->add('last-name',
                TextType::class,
                    ['label' => 'Nachname:',
                    'attr' => ['class' => 'form-control',
                    'required' => true
                ]]
            )
            ->add('username',
                TextType::class,
                ['label' => 'Benutzername:',
                    'attr' => ['class' => 'form-control',
                        'required' => true
                    ]]
            )
            ->add('role',
                TextType::class,
                ['label' => 'Rolle:',
                    'attr' => ['class' => 'form-control',
                        'required' => true
                    ]]
            )
            ->add('password',
                PasswordType::class,
                ['label' => 'Passwort:',
                    'attr' => ['class' => 'form-control',
                        'required' => true
                    ]]
            )
            ->add('username',
                SubmitButton::class,
                ['label' => 'Erstellen:',
                    'attr' => ['class' => 'form-control'
                    ]]
            )
        ;
    }
}