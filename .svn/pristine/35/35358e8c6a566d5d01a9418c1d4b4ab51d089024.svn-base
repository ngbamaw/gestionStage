<?php


namespace AppBundle\Form;

use AppBundle\Model\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SignupUserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstname', TextType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'uk-input',
                    'placeholder' => 'Prénom',
                    'pattern' => '^[a-zA-Z\-]+$'
                ],
                'error_bubbling' => true,
            ])
            ->add('lastname', TextType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'uk-input',
                    'placeholder' => 'Nom',
                    'pattern' => '^[a-zA-Z\-]+$'
                ],
                'error_bubbling' => true,
            ])
            ->add('mail', EmailType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'uk-input',
                    'placeholder' => 'Email'
                ],
                'error_bubbling' => true
            ])
            ->add('phoneNumber', TelType::class, [
                'attr' => [
                    'class' => 'uk-input',
                    'placeholder' => 'Téléphone',
                    'pattern' => '^0[1-8][0-9]{8}$'
                ],
                'error_bubbling' => true
            ])
            ->add('plainPassword', RepeatedType::class, [
                'type' => PasswordType::class,
                'first_options' => [
                    'label' => false,
                    'error_bubbling' => true,
                    'attr' => ['placeholder' => 'Mot de passe', 'class' => 'uk-input']
                ],
                'second_options' => [
                    'label' => false,
                    'error_bubbling' => true,
                    'attr' => ['placeholder' => 'Confirmation', 'class' => 'uk-input',]
                ],
                'invalid_message' => 'Les mots de passe ne correspondent pas'
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
