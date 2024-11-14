<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class NewUserFormType extends AbstractType {
    public function buildForm(FormBuilderInterface $builder, array $options): void {
        $builder
            ->add('firstname',
                TextType::class,
                    ['label' => 'Vorname:',
                    'attr' => ['class' => 'form-control',
                    'required' => true,
                ]]
            )
            ->add('lastname',
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
            ->add('email',
                TextType::class,
                ['label' => 'E-Mail:',
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
            ->add('create',
                SubmitType::class,
                ['label' => 'Erstellen:',
                    'attr' => ['class' => 'form-control'
                    ]]
            )
        ;
    }
}