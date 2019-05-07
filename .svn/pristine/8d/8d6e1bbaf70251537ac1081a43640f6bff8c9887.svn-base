<?php


namespace AppBundle\Form;


use AppBundle\DAO\DaoPromotion;
use AppBundle\Model\Etudiant;
use AppBundle\Model\Promotion;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SignupStudiantType extends SignupUserType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $dao = new DaoPromotion();
        parent::buildForm($builder, $options);
        $builder
            ->add('idOption', ChoiceType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'uk-select'
                ],
                'choices' => [
                    'AUCUN' => null,
                    'SLAM' => '1',
                    'SISR' => '2'
                ]
            ])
            ->add('idPromotion', ChoiceType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'uk-select'
                ],
                'choices' => $dao->readAll(),
                'choice_label' => function ($promotion, $key, $value) {
                    $label = '';
                    $dao = new DaoPromotion();

                    if ($promotion instanceof Promotion) {
                        $value = $promotion->getId();
                    } else {
                        $value = $dao->read($promotion)->getYear();
                    }

                    return $promotion->getYear();
                },
                'choice_value' => function ($promotion) {
                    $value = '';

                    if ($promotion instanceof Promotion) {
                        $value = $promotion->getId();
                    } else {
                        $value = $promotion;
                    }

                    return $value ? $value : '';
                }
            ])
            ->add('address', TextType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'uk-input',
                    'placeholder' => 'Adresse'
                ]
            ])
            ->add('town', TextType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'uk-input',
                    'placeholder' => 'Ville'
                ]
            ])
            ->add('postalCode', TextType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'uk-input',
                    'placeholder' => 'Code postal'
                ]
            ])
            ->add('birthdate', DateType::class, [
                'label' => false,
                'widget' => 'single_text',
                'input' => 'string',
                'attr' => [
                    'class' => 'uk-input',
                    'placeholder' => 'Date de naissance'
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Etudiant::class,
        ]);
    }
}
