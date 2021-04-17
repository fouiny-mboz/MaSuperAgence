<?php

namespace App\Form;

use App\Entity\Heat;
use App\Entity\Property;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class PropertyType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class,[
                'label' => 'Type de logement',
                'required' => true,
                'attr' => [
                    'class' => 'form-control',
                ]
            ])
            ->add('description', TextareaType::class, [
                'label' => 'description de votre logement',
                'required' => true,
                'attr' => [
                    'class' => 'form-control',
                ]
            ])
            ->add('surface', NumberType::class, [
                'label' => 'Surface du logement',
                'required' => true,
                'attr' => [
                    'class' => 'form-control',
                ]
            ])
            ->add('rooms', NumberType::class, [
                'label' => 'Nombre de chambre',
                'required' => true,
                'attr' => [
                    'class' => 'form-control',
                ]
            ])
            ->add('bedrooms', NumberType::class, [
                'label' => 'Nombre de salle be bains',
                'required' => true,
                'attr' => [
                    'class' => 'form-control',
                ]
            ])
            ->add('floor', NumberType::class, [
                'label' => "Nombre d'étage",
                'required' => true,
                'attr' => [
                    'class' => 'form-control',
                ]
            ])
            ->add('price', NumberType::class, [
                'label' => 'Prix',
                'required' => true,
                'attr' => [
                    'class' => 'form-control',
                ]
            ])
            ->add('heat_name', EntityType::class, [
                'label' => 'choisissez le Type de chaufage',
                'class' => Heat::class,
                'multiple' => false,
                'expanded' => true,

            ])
            ->add('city', TextType::class, [
                'label' => 'Ville',
                'attr' => [
                    'class' => 'form-control',
                    'reequired' => true,
                ]
            ])
            ->add('country', CountryType::class, [
                'label' => 'Choisissez le pays',
                'attr' => [
                    'class' => 'form-control',
                    'reequired' => true,
                ]
            ])
            ->add('address', TextType::class, [
                'label' => 'Votre adresse',
                'attr' => [
                    'class' => 'form-control',
                    'reequired' => true,
                ]
            ])
            ->add('postal_code', TextType::class,[
                'label' => 'Code Postale',
                'attr' => [
                    'class' => 'form-control',
                    'reequired' => true,
                ]
            ])
            ->add('sold', TextType::class, [
                'label' => 'Soldé',
                'attr' => [
                    'class' => 'form-control',
                    'reequired' => true,
                ]
            ])
            ->add('created_at',DateTimeType::class, [
                'label' => 'Date',
                'attr' => [
                    'class' => 'form-control',
                    'reequired' => true,
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Property::class,
        ]);
    }
}
