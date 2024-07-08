<?php

// src/Form/ReservationType.php
namespace App\Form;

use App\Entity\Reservation;
use App\Entity\User;
use App\Entity\Vehicle;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
// use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;




class ReservationType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $user = $options['user'];
        $vehicle = $options['vehicle'];

        $builder
            ->add('start_date', DateType::class, [
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd',
                'invalid_message' => 'Veuillez saisir une date valide.',
                'label' => 'Date de début',
            ])
            ->add('end_date', DateType::class, [
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd',
                'invalid_message' => 'Veuillez saisir une date valide.',
                'label' => 'Date de fin',
            ])
            ->add('message', TextareaType::class, [
                'label' => 'Message',
            ])
            ->add('user', EntityType::class, [
                'class' => User::class,
                'choice_label' => 'username', 
                'label' => 'Pseudo',
                'data' => $user,
                'disabled' => true,
            ])
            ->add('vehicle', EntityType::class, [
                'class' => Vehicle::class,
                'choice_label' => function (Vehicle $vehicle) {
                    return $vehicle->getBrand() . ' ' . $vehicle->getModel(); 
                },
                'label' => 'Véhicule',
                'data' => $vehicle,
                'disabled' => true,
            ]);
           
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reservation::class,
            'user' => null,
            'vehicle' => null,
        ]);
    }
}
