<?php

namespace App\Form;

use App\Entity\Project;
use App\Entity\Categories;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\HttpFoundation\File\File;

class ProjectType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title')
            ->add('description')
            ->add('projet_fich', FileType::class, [
                'label' => 'Project File',
                'required' => false,
                'attr' => [
                    'accept' => '.pdf,.zip,.rar'
                ],
                'disabled' => $options['disable_projet_fich'], // Conditionally set disabled option
            ])
            ->add('categories', EntityType::class, [
                'class' => Categories::class, 
                'choice_label' => 'name', 
            ]);

        // Add a transformer for the file field
        $builder->get('projet_fich')->addModelTransformer(new FileToPathTransformer());
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Project::class,
            'disable_projet_fich' => false, // Default value for the disable_projet_fich option
        ]);
    }
}





class FileToPathTransformer implements DataTransformerInterface
{
    public function transform($file)
    {
        // transform the File object into a string (file path)
        if ($file instanceof File) {
            return $file->getPathname();
        }

        return null;
    }

    public function reverseTransform($path)
    {
        // transform the string (file path) back into a File object
        if ($path !== null) {
            return new File($path);
        }

        return null;
    }
}
