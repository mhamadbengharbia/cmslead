<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class AdminPartnerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $isEdit = $options['is_edit'] ?? false;

        $builder
            ->add('name', TextType::class, [
                'label' => 'Nom du partner',
            ])
            ->add('slug', TextType::class, [
                'label' => 'Slug partner',
            ])
            ->add('email', EmailType::class, [
                'label' => 'Email du compte partner',
                'mapped' => false,
            ])
            ->add('plainPassword', PasswordType::class, [
                'label' => $isEdit ? 'Nouveau mot de passe (optionnel)' : 'Mot de passe initial',
                'mapped' => false,
                'required' => !$isEdit,
            ])
            ->add('isActive', CheckboxType::class, [
                'label' => 'Partner actif',
                'required' => false,
            ])
            ->add('save', SubmitType::class, [
                'label' => $isEdit ? 'Mettre à jour' : 'Créer le partner',
            ])
        ;
    }

    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'is_edit' => false,
        ]);
    }
}