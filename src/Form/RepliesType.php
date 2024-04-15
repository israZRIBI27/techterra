<?php

namespace App\Form;

use App\Entity\Replies;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Regex;

class RepliesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('content', CKEditorType::class, [
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please enter a comment.',
                    ]),
                    new Regex([
                        'pattern' => '/\b\w+\b(?:\W+\b\w+\b){4,}/',
                        'message' => 'Comment Too Short.',
                    ]),
                ],
            ])
            ->add('createdAt')
            ->add('user')
            ->add('threads')
            ->add('envoyer', SubmitType::class);

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Replies::class,
        ]);
    }
}
