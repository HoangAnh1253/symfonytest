<?php

namespace App\Form;

use App\Entity\Equipment;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EquipmentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('name', TextType::class,  [
            'attr' => array(
                'class' => 'bg-transparent block border-b-2 w-full h-20 text-6xl outline-none',
                'placeholder' => 'Enter title...'
            ),
            'label' => false,
            'required' => false
        ])
        ->add('description', TextType::class,  [
            'attr' => array(
                'class' => 'bg-transparent block border-b-2 w-full h-20 text-6xl outline-none',
                'placeholder' => 'Enter title...'
            ),
            'label' => false,
            'required' => false
        ])
        
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Equipment::class,
        ]);
    }
}