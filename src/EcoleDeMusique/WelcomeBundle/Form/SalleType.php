<?php

namespace EcoleDeMusique\WelcomeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SalleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'EcoleDeMusique\WelcomeBundle\Entity\Salle'
        ));
    }

    public function getName()
    {
        return 'ecoledemusique_welcomebundle_salletype';
    }
}
