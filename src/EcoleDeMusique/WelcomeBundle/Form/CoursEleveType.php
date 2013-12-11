<?php

namespace EcoleDeMusique\WelcomeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CoursEleveType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('cours')
            ->add('eleve')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'EcoleDeMusique\WelcomeBundle\Entity\CoursEleve'
        ));
    }

    public function getName()
    {
        return 'ecoledemusique_welcomebundle_courselevetype';
    }
}
