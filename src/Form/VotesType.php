<?php

namespace App\Form;

use App\Entity\Votes;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class VotesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $hasUpvoted = $options['has_upvoted'];
        $hasDownvoted = $options['has_downvoted'];
        $builder


            ->add('upvote', ButtonType::class, [
                'label' => '⬆️',
                'attr' => [
                    'class' => 'btn upvote-btn'.($options['has_upvoted'] ? ' border border-5 rounded' : ''),
                    'data-vote-type' => 'upvote',
                ],
            ])
            ->add('downvote', ButtonType::class, [
                'label' => '⬇️',
                'attr' => [
                    'class' => 'btn downvote-btn'.($options['has_downvoted'] ? ' border border-5 rounded' : ''),
                    'data-vote-type' => 'downvote',
                ],
            ])
            ->add('user')
            ->add('threads');
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Votes::class,
            'has_upvoted' => false,
            'has_downvoted' => false,
        ]);
    }
}
