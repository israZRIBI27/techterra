<?php

namespace App\Form;

use App\Entity\Sponsor;
use App\Entity\Events;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SponsorType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
            ->add('montant')
            ->add('idevenement', EntityType::class, [
                'class' => Events::class, 
                'choice_label' => 'titreevent', 
            ]);
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Sponsor::class,
        ]);
    }
}
