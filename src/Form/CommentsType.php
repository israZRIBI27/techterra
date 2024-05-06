<?php

namespace App\Form;

use App\Entity\Comments;
use App\Entity\News;
use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class CommentsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('user')
        ->add('news')
        ->add('content')
        ->add('time')
        ->add('envoyer', SubmitType::class);

    ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Comments::class,
            'html5' => false,
            'attr' => ['novalidate' => 'novalidate'],
        ]);
    }
}
