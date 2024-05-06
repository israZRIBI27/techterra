<?php

namespace App\Form;

use App\Entity\Project;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
//use Vich\UploaderBundle\Form\Type\VichFileType;
use App\Entity\Categories;

class ProjectType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title')
            ->add('description')
            ->add('projet_fich', FileType::class, [
                'label' => 'projet_fich',
                'required' => False,
                'attr' => [
                    'accept' => '.pdf,.zip,.rar'
                ]
            ])
            ->add('categories', EntityType::class, [
                'class' => Categories::class, 
                'choice_label' => 'name', 
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Project::class,
        ]);
    }
}
