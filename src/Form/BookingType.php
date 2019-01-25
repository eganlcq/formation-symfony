<?php

namespace App\Form;

use App\Entity\Booking;
use App\Form\ApplicationType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use App\Form\DataTransformer\DateTimeToStringTransformer;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class BookingType extends ApplicationType
{

    private $transformer;

    public function __construct(DateTimeToStringTransformer $transformer) {

        $this->transformer = $transformer;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'startDate',
                TextType::class,
                $this->getConfig("Date d'arrivée", "Date à laquelle vous comptez arriver")
            )
            ->add(
                'endDate',
                TextType::class,
                $this->getConfig("Date de départ", "Date à laquelle vous comptez quitter les lieux")
            )
            ->add(
                'comment',
                TextareaType::class,
                $this->getConfig(false, "Faites nous part d'un commentaire éventuel (optionnel)", ["required" => false])
            )
        ;

        $builder->get('startDate')->addModelTransformer($this->transformer);
        $builder->get('endDate')->addModelTransformer($this->transformer);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Booking::class,
        ]);
    }
}
