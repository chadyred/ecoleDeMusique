<?php

namespace EcoleDeMusique\WelcomeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CoursType extends AbstractType
{

    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('jour', 'choice',array('choices' => array('10' => 'Lundi', '11' => 'Mardi','12' => 'Mecredi','13'=>'Jeudi','14'=>'Vendredi','15'=>'Samedi','16'=>'Dimanche')))
            ->add('heure','time', array('input'  => 'timestamp', 'widget' => 'choice','hours' => range(8,21),))
            ->add('duree','time', array('input'  => 'timestamp', 'widget' => 'choice','hours' => range(0,6),))
            ->add('salle')
            ->add('prof')
            ->add('activite')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'EcoleDeMusique\WelcomeBundle\Entity\Cours'
        ));
    }

    public function getName()
    {
        return 'ecoledemusique_welcomebundle_courstype';
    }
}
