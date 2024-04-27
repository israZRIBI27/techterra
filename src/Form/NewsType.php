<?php

namespace App\Form;

use App\Entity\News;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use FOS\CKEditorBundle\Form\Type\CKEditorType;



class NewsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title')  ->add('title', TextType::class, [
                'constraints' => [
                    new NotBlank(['message' => 'Please enter a title.']),
                    new Length([
                        'min' => 2,
                        'minMessage' => 'The title must be at least {{ limit }} characters long.',
                    ]),
                ],
            ])
            ->add('author', TextType::class, [
                'constraints' =>
                    new Regex([
                        'pattern' => '/^[^\d]+$/',
                        'message' => 'The author should not contain numbers.',
                    ]),
                ],
            )
            ->add('content', CKEditorType::class, [
                'constraints' => [
                    new NotBlank(['message' => 'Please enter content.']),
                    new Regex([
                        'pattern' => '/\b\w+\b(?:\W+\b\w+\b){50,}/',
                        'message' => 'The content must contain at least 50 words.',
                    ]),
                ],
            ])         
            ->add('time', DateTimeType::class, [
                'input'  => 'datetime',
                'widget' => 'single_text',
                'data' => new \DateTime(), // Set default value to current datetime
      
            ]);  
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => News::class,
            'html5' => false,
            'attr' => ['novalidate' => 'novalidate'],
        ]);
    }
}
