<?php

namespace App\Form;

use App\Entity\LandingPage;
use App\Entity\LandingTemplate;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ColorType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Validator\Constraints\Url;

class LandingPageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $hexColorRegex = '/^#(?:[A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/';

        $builder
            ->add('name', TextType::class, [
                'label' => 'Name',
                'constraints' => [
                    new NotBlank(message: 'Le nom est obligatoire.'),
                    new Length(
                        min: 2,
                        max: 255,
                        minMessage: 'Le nom doit contenir au moins {{ limit }} caractères.',
                        maxMessage: 'Le nom ne peut pas dépasser {{ limit }} caractères.'
                    ),
                ],
            ])
            ->add('slug', TextType::class, [
                'label' => 'Slug',
                'help' => 'Minuscules et tirets uniquement. Exemple : offre-auto',
                'constraints' => [
                    new NotBlank(message: 'Le slug est obligatoire.'),
                    new Length(
                        min: 2,
                        max: 191,
                        minMessage: 'Le slug doit contenir au moins {{ limit }} caractères.',
                        maxMessage: 'Le slug ne peut pas dépasser {{ limit }} caractères.'
                    ),
                    new Regex(
                        pattern: '/^[a-z]+(?:-[a-z]+)*$/',
                        message: 'Le slug doit contenir uniquement des lettres minuscules et des tirets.'
                    ),
                ],
            ])
            ->add('title', TextType::class, [
                'label' => 'Title',
                'constraints' => [
                    new NotBlank(message: 'Le titre est obligatoire.'),
                    new Length(
                        min: 3,
                        max: 255,
                        minMessage: 'Le titre doit contenir au moins {{ limit }} caractères.',
                        maxMessage: 'Le titre ne peut pas dépasser {{ limit }} caractères.'
                    ),
                    new Regex(
                        pattern: '/^[A-ZÀ-Ý]/u',
                        message: 'Le titre doit commencer par une majuscule.'
                    ),
                ],
            ])
            ->add('subtitle', TextareaType::class, [
                'label' => 'Subtitle',
                'required' => false,
                'constraints' => [
                    new Length(
                        max: 1000,
                        maxMessage: 'Le sous-titre ne peut pas dépasser {{ limit }} caractères.'
                    ),
                ],
            ])
            ->add('ctaText', TextType::class, [
                'label' => 'Cta text',
                'constraints' => [
                    new NotBlank(message: 'Le texte du CTA est obligatoire.'),
                    new Length(
                        min: 2,
                        max: 255,
                        minMessage: 'Le CTA doit contenir au moins {{ limit }} caractères.',
                        maxMessage: 'Le CTA ne peut pas dépasser {{ limit }} caractères.'
                    ),
                ],
            ])
            ->add('formTitle', TextType::class, [
                'label' => 'Form title',
                'constraints' => [
                    new NotBlank(message: 'Le titre du formulaire est obligatoire.'),
                    new Length(
                        min: 2,
                        max: 255,
                        minMessage: 'Le titre du formulaire doit contenir au moins {{ limit }} caractères.',
                        maxMessage: 'Le titre du formulaire ne peut pas dépasser {{ limit }} caractères.'
                    ),
                ],
            ])
            ->add('successMessage', TextareaType::class, [
                'label' => 'Success message',
                'required' => false,
                'constraints' => [
                    new Length(
                        max: 1000,
                        maxMessage: 'Le message de succès ne peut pas dépasser {{ limit }} caractères.'
                    ),
                ],
            ])
            ->add('primaryColor', ColorType::class, [
                'label' => 'Primary color',
                'required' => false,
                'constraints' => [
                    new Regex(
                        pattern: $hexColorRegex,
                        message: 'La couleur principale doit être un code hex valide.'
                    ),
                ],
            ])
            ->add('secondaryColor', ColorType::class, [
                'label' => 'Secondary color',
                'required' => false,
                'constraints' => [
                    new Regex(
                        pattern: $hexColorRegex,
                        message: 'La couleur secondaire doit être un code hex valide.'
                    ),
                ],
            ])
            ->add('buttonColor', ColorType::class, [
                'label' => 'Button color',
                'required' => false,
                'constraints' => [
                    new Regex(
                        pattern: $hexColorRegex,
                        message: 'La couleur du bouton doit être un code hex valide.'
                    ),
                ],
            ])
            ->add('landingTemplate', EntityType::class, [
                'class' => LandingTemplate::class,
                'choice_label' => 'name',
                'label' => 'Landing template',
                'placeholder' => 'Choisir un template',
                'constraints' => [
                    new NotBlank(message: 'Le template est obligatoire.'),
                ],
            ])
            ->add('isActive', CheckboxType::class, [
                'label' => 'Is active',
                'required' => false,
            ])
            ->add('heroImage', TextType::class, [
                'label' => 'Hero image',
                'required' => false,
                'constraints' => [
                    new Length(
                        max: 1000,
                        maxMessage: 'L’URL de l’image ne peut pas dépasser {{ limit }} caractères.'
                    ),
                    new Url(message: 'Veuillez saisir une URL valide pour l’image.', protocols: ['http', 'https']),
                ],
            ])
            ->add('save', SubmitType::class, [
                'label' => 'Modifier',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => LandingPage::class,
        ]);
    }
}