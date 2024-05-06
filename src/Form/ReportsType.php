<?php

namespace App\Form;

use App\Entity\Reports;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class ReportsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $hasReported = $options['has_reported'];
        $builder


            ->add('reported', ButtonType::class, [
                'label' => '⚠️',
                'attr' => [
                    'class' => 'btn report-btn'.($options['has_reported'] ? ' border border-5 rounded' : ''),
                    'data-report-status' => 'report',
                ],
            ])
           
            ->add('user')
            ->add('news');
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reports::class,
            'has_reported' => false,
    
        ]);
    }
}
