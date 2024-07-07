<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class RegistrationFormType extends AbstractType
{
public function buildForm(FormBuilderInterface $builder, array $options): void
{
    $builder
         ->add('username', TextType::class, [
                'required' => false,
            ])
            ->add('email', TextType::class, [
                'required' => false,
            ])
        ->add('agreeTerms', CheckboxType::class, [
            'mapped' => false,
            'constraints' => [
                new IsTrue([
                    'message' => 'Vous devez accepter nos conditions d\'utilisation.',
                ]),
            ],
        ])
        ->add('plainPassword', PasswordType::class, [
            'mapped' => false,
            'constraints' => [
                new NotBlank([
                    'message' => 'Merci de renseigner un mot de passe.',
                ]),
                new Length([
                    'min' => 12,
                    'minMessage' => 'Votre mot de passe n\'est pas assez fort',
                    'max' => 4096,
                ]),
            ],
        ])
        ->add('confirmPassword', PasswordType::class, [
            'mapped' => false,
            'label' => 'Confirmer le mot de passe',
            'constraints' => [
                new NotBlank([
                    'message' => 'Merci de confirmer votre mot de passe.',
                ]),
            ],
        ])
        ->add('agreeRGPD', CheckboxType::class, [
            'mapped' => false,
            'label' => 'J\'accepte la politique de confidentialité.',
            'constraints' => [
                new IsTrue([
                    'message' => 'Vous devez accepter notre politique de confidentialité pour continuer.',
                ]),
            ],
        ])
    ;
}
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
