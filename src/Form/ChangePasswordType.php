<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ChangePasswordType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', EmailType::class, [
                 'disabled' => true,
                 'label' => 'Votre adresse email'
            ])
            ->add('firstname', TextType::class, [
                 'disabled' => true,
                 'label' => 'Votre prénom'
            ])
            ->add('lastname', TextType::class, [
               'disabled' => true,
               'label' => 'Votre nom'
          ])
          ->add('old_password', PasswordType::class, [
               'label' => 'Votre mot de passe',
               'mapped' => false,
               'attr' => [
                    'placeholder' => 'Saisir votre nouveau mot de passe'
               ]
          ])
          ->add('new_password',  RepeatedType::class, [
               'type' => PasswordType::class,
               'mapped' => false,
               'invalid_message' => 'Les deux mots de passe ne sont pas identiques.',
               'label' => 'Votre nouveau mot de passe',
               'required' => true,
               'first_options' => [
                    'label' => 'Saisir votre nouveau mot de passe',
                    'attr' => [
                         'placeholder' => 'Saisir votre nouveau mot de passe'
                    ]
               ],
               'second_options' => [
                    'label' => 'Confirmer votre nouveau mot de passe',
                    'attr' => [
                         'placeholder' => 'Confirmer nouveau votre mot de passe'
                    ]
               ]
          ])
          ->add('submit', SubmitType::class, [
               'label' => 'S\'inscrire'
          ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
