<?php

namespace EcoleDeMusique\WelcomeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PaiementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom','text',array('required'=>false))
            ->add('prenom','text',array('required'=>false))
            ->add('cycle','text',array('required'=>false))
            ->add('dateInterupt','date',array('required'=>false))
            ->add('sommePeriode','integer',array('required'=>false))
            ->add('sommeTotal','integer',array('required'=>false))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'EcoleDeMusique\WelcomeBundle\Entity\Paiement'
        ));
    }

    public function getName()
    {
        return 'ecoledemusique_welcomebundle_paiementtype';
    }
}
