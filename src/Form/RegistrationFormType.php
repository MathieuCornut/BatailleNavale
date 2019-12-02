<?php

namespace App\Form;

use App\Entity\User;
use App\Form\ApplicationType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;

class RegistrationFormType extends ApplicationType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('pseudo', TextType::class,
                $this->getTableau('Pseudo', 'saisissez votre speudo de capitaine')
            )
            ->add('email', EmailType::class,
                $this->getTableau('Email', 'saisissez votre Email')
            )
           
            /*->add('password', PasswordType::class,
            $this->getTableau('Password', 'saisissez votre mot de passe',
                ['mapped' => false,
                'constraints' => [
                    new Length([
                        'min' => 6,
                        'minMessage' => 'Your password should be at least {{ limit }} characters',
                        // max length allowed by Symfony for security reasons
                        'max' => 4096,
                    ]),
                ],
            ]))
            ->add(
                'passwordConfirm', 
                RepeatedType:: class, 
                $this->getTableau('Confirmation du mot de passe', 'Confirmez votre mot de passe...')
            )*/

            ->add('password', 
                RepeatedType::class, [
                'type' => PasswordType::class,
                'required' => true,
                'first_options'  => ['label' => 'saisissez votre mot de passe'],
                'second_options' => ['label' => 'Confirmez votre mot de passe']
            ]);
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
