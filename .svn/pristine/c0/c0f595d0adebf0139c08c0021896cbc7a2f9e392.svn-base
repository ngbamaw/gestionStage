<?php


namespace AppBundle\Form;


use Symfony\Component\Form\FormBuilderInterface;

class ModifyStudiantType extends SignupStudiantType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);
        $builder->get('plainPassword')->setRequired(false);
    }
}
