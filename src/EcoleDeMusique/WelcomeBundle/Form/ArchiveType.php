<?php

namespace EcoleDeMusique\WelcomeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ArchiveType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
       /* $builder
            ->add("renouvellement", 'choice', array('choices' => array('Oui' => 'oui', 'Non' => 'non',)));
        * */
        
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'EcoleDeMusique\WelcomeBundle\Entity\Archive'
        ));
    }

    public function getName()
    {
        return 'ecoledemusique_welcomebundle_archivetype';
    }
}
