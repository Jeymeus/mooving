<?php

namespace App\Form;

use App\Entity\Reservation;
use App\Entity\User;
use App\Entity\Vehicle;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReservationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
    $builder
    ->add('start_date', DateType::class, [
    'widget' => 'single_text',
    'label' => 'Start Date',
    ])
    ->add('end_date', DateType::class, [
    'widget' => 'single_text',
    'label' => 'End Date',
    ])
    ->add('message', TextareaType::class, [
    'label' => 'Message',
    ])
    ->add('user', EntityType::class, [
    'class' => User::class,
    'choice_label' => 'username', // Utilisez le nom d'utilisateur pour l'affichage
    'label' => 'User',
    ])
    ->add('vehicle', EntityType::class, [
    'class' => Vehicle::class,
    'choice_label' => function (Vehicle $vehicle) {
    return $vehicle->getBrand() . ' ' . $vehicle->getModel(); // Combine brand and model for display
    },
    'label' => 'Vehicle',
    ])
    ->add('save', SubmitType::class, [
    'label' => 'Save Reservation'
    ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
    $resolver->setDefaults([
    'data_class' => Reservation::class,
    ]);
    }
}