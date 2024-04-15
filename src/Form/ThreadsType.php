<?php

namespace App\Form;

use App\Entity\Threads;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Regex;

class ThreadsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', TextType::class, [
                'constraints' => [
                    new NotBlank(['message' => 'Please enter a title.']),
                    new Length([
                        'min' => 5,
                        'minMessage' => 'The title must be at least {{ limit }} characters long.',
                    ]),
                ],
            ])
            ->add('content', CKEditorType::class, [
                'constraints' => [
                    new NotBlank(['message' => 'Please enter content.']),
                    new Regex([
                        'pattern' => '/\b\w+\b(?:\W+\b\w+\b){50,}/',
                        'message' => 'The content must contain at least 50 words.',
                    ]),
                ],
            ])            ->add('createdAt')
            ->add('user')
            ->add('category')
            ->add('envoyer', SubmitType::class, [
        'label' => 'Submit',
    ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Threads::class,
            'html5' => false,
            'attr' => ['novalidate' => 'novalidate'],
        ]);
    }
}
