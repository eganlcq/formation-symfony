<?php

namespace App\Form;

use App\Entity\Ad;
use App\Entity\User;
use App\Entity\Booking;
use App\Form\ApplicationType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class AdminBookingType extends ApplicationType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'startDate',
                DateType::class,
                $this->getConfig("Date d'arrivée", "Date à laquelle le client arrive", [

                    'widget'    =>  'single_text'
                ])
            )
            ->add(
                'endDate',
                DateType::class,
                $this->getConfig("Date de départ", "Date à laquelle le client part", [

                    'widget'    =>  'single_text'
                ])
            )
            ->add(
                'comment',
                TextareaType::class,
                $this->getConfig("Commentaire", "Commentaire de la réservation")
            )
            ->add(
                'booker',
                EntityType::class,
                $this->getConfig("Client", "La personne ayant effectué la réservation", [

                    'class'         =>  User::class,
                    'choice_label'  =>  function($user) {

                        return $user->getFirstName() . ' ' . strtoupper($user->getLastName());
                    }
                ])
            )
            ->add(
                'ad',
                EntityType::class,
                $this->getConfig("Annonce", "L'annonce sur laquelle porte la réservation", [

                    'class'         =>  Ad::class,
                    'choice_label'  =>  'title'
                ])
            )
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Booking::class,
        ]);
    }
}
