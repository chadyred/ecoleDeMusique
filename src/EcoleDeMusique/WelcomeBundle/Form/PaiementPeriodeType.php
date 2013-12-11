<?php

namespace EcoleDeMusique\WelcomeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PaiementPeriodeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dateNumeraire')
            ->add('dateChequeJeune')
            ->add('dateChequeVacance')
            ->add('dateCheque')
            ->add('dateCb')
            ->add('datePrelev')
  
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'EcoleDeMusique\WelcomeBundle\Entity\PaiementPeriode'
        ));
    }

    public function getName()
    {
        return 'ecoledemusique_welcomebundle_paiementperiodetype';
    }
}
