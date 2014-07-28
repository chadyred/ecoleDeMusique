<?php

namespace EcoleDeMusique\WelcomeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FamilleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('qf')
              ->add('nom', 'text', array(
                    'required' => true, 'attr' => array(
                        'placeholder' => 'Nom du responsable de la famille', 'class' => 'form-control'
            )))->add('prenom', 'text', array(
                    'required' => true, 'attr' => array(
                        'placeholder' => 'Prénom du responsable de la famille', 'class' => 'form-control'
            )))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'EcoleDeMusique\WelcomeBundle\Entity\Famille'
        ));
    }

    public function getName()
    {
        return 'ecoledemusique_welcomebundle_familletype';
    }
}
