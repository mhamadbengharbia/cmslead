<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Regex;

class AdminPartnerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $isEdit = $options['is_edit'] ?? false;

        $passwordConstraints = [
            new Length(
                min: 8,
                minMessage: 'Le mot de passe doit contenir au moins {{ limit }} caractères.'
            ),
        ];

        if (!$isEdit) {
            array_unshift($passwordConstraints, new NotBlank(message: 'Le mot de passe est obligatoire.'));
        }

        $builder
            ->add('name', TextType::class, [
                'label' => 'Nom du partner',
                'constraints' => [
                    new NotBlank(message: 'Le nom du partner est obligatoire.'),
                    new Length(
                        min: 2,
                        max: 255,
                        minMessage: 'Le nom doit contenir au moins {{ limit }} caractères.',
                        maxMessage: 'Le nom ne peut pas dépasser {{ limit }} caractères.'
                    ),
                ],
            ])
            ->add('slug', TextType::class, [
                'label' => 'Slug partner',
                'constraints' => [
                    new NotBlank(message: 'Le slug est obligatoire.'),
                    new Length(
                        min: 2,
                        max: 191,
                        minMessage: 'Le slug doit contenir au moins {{ limit }} caractères.',
                        maxMessage: 'Le slug ne peut pas dépasser {{ limit }} caractères.'
                    ),
                    new Regex(
                        pattern: '/^[a-zA-Z0-9\-_ ]+$/',
                        message: 'Le slug ne doit contenir que des lettres, chiffres, espaces, tirets ou underscores.'
                    ),
                ],
            ])
            ->add('email', EmailType::class, [
                'label' => 'Email du compte partner',
                'mapped' => false,
                'constraints' => [
                    new NotBlank(message: 'L’email est obligatoire.'),
                    new Email(message: 'Veuillez saisir un email valide.'),
                    new Length(
                        max: 180,
                        maxMessage: 'L’email ne peut pas dépasser {{ limit }} caractères.'
                    ),
                ],
            ])
            ->add('plainPassword', PasswordType::class, [
                'label' => $isEdit ? 'Nouveau mot de passe (optionnel)' : 'Mot de passe initial',
                'mapped' => false,
                'required' => !$isEdit,
                'constraints' => $passwordConstraints,
            ])
            ->add('isActive', CheckboxType::class, [
                'label' => 'Partner actif',
                'required' => false,
            ])
            ->add('save', SubmitType::class, [
                'label' => $isEdit ? 'Mettre à jour' : 'Créer le partner',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'is_edit' => false,
        ]);
    }
}