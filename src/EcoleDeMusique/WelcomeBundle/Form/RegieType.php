<?php

namespace EcoleDeMusique\WelcomeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RegieType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('capv')
            ->add('enfantAdulte')
            ->add('cycleParcours')
            ->add('intru2')
            ->add('intru3')
            ->add('sommeSansRemise')
            ->add('remise')
            ->add('sommeAvecRemise')
            ->add('regies')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'EcoleDeMusique\WelcomeBundle\Entity\Regie'
        ));
    }

    public function getName()
    {
        return 'ecoledemusique_welcomebundle_regietype';
    }
}
