<?php

namespace App\Form;

use App\Entity\Events;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EventsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $gouvernorats = [
            'Ariana', 'Béja', 'Ben Arous', 'Bizerte', 'Gabès', 'Gafsa', 'Jendouba',
            'Kairouan', 'Kasserine', 'Kébili', 'Le Kef', 'Mahdia', 'La Manouba',
            'Médenine', 'Monastir', 'Nabeul', 'Sfax', 'Sidi Bouzid', 'Siliana',
            'Sousse', 'Tataouine', 'Tozeur', 'Tunis', 'Zaghouan'
        ];

        $gouvernoratsChoices = array_combine($gouvernorats, $gouvernorats);

        $builder
            ->add('titreevent')
            ->add('type')
            ->add('lieu', ChoiceType::class, [
                'choices' => $gouvernoratsChoices,
                'placeholder' => 'Sélectionnez un gouvernorat',
                'attr' => ['class' => 'form-control']
            ])
            ->add('prix')
            ->add('nbMax');
    }

   



    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Events::class,
        ]);
    }
}