<?php

namespace App\Form;


use App\Entity\LandingPage;
use App\Entity\LandingTemplate;
use App\Entity\Partner;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ColorType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
class LandingPageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name')
            ->add('slug')
            ->add('title')
            ->add('subtitle')
            ->add('ctaText')
            ->add('heroImage')
            ->add('primaryColor')
            ->add('secondaryColor')
            ->add('buttonColor')
            ->add('formTitle')
            ->add('successMessage')
            ->add('isActive')
            ->add('createdAt', null, [
                'widget' => 'single_text'
            ])
            ->add('updatedAt', null, [
                'widget' => 'single_text'
            ])
            ->add('partner', EntityType::class, [
                'class' => Partner::class,
                'choice_label' => 'id',
            ])
            ->add('landingTemplate', EntityType::class, [
                'class' => LandingTemplate::class,
                'choice_label' => 'id',
            ])
            ->add('save', SubmitType::class, [
                'label' => 'Modifier',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => LandingPage::class,
        ]);
    }
}
