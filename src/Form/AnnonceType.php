<?php

namespace App\Form;

use App\Entity\Ad;
use App\Form\ImageType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class AnnonceType extends AbstractType
{
    private function getConfig($label, $placeholder, $options = []) {

        return array_merge([
            'label' =>  $label,
            'attr'  =>  [
                'placeholder'   =>  $placeholder
            ]
        ], $options);
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'title',
                TextType::class,
                $this->getConfig('Titre', 'Titre pour votre annonce')
            )
            ->add(
                'slug',
                TextType::class,
                $this->getConfig('Chaine URL', 'Adresse web (optionnel)', ['required'   =>  false])
            )
            ->add(
                'coverImage',
                UrlType::class,
                $this->getConfig('URL de l\'image', 'Adresse de l\'image principale')
            )
            ->add(
                'introduction',
                TextType::class,
                $this->getConfig('Introduction', 'Description globale de l\'annonce')
            )
            ->add(
                'content',
                TextareaType::class,
                $this->getConfig('Description', 'Description détaillée du logement')
            )
            ->add(
                'rooms',
                IntegerType::class,
                $this->getConfig('Nombre de chambres', 'Nombre de chambres disponibles')
            )
            ->add(
                'price',
                MoneyType::class,
                $this->getConfig('Prix par nuit', 'Prix du logement par nuit')
            )
            ->add(
                'images',
                CollectionType::class,
                [
                    'entry_type'    =>  ImageType::class,
                    'allow_add'     =>  true,
                    'allow_delete'  =>  true
                ]
            )
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Ad::class,
        ]);
    }
}
