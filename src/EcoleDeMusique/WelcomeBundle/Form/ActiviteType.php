<?php

namespace EcoleDeMusique\WelcomeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ActiviteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('categorie','choice',array('choices'=>array('instrument'=>'instrument','pratique collective'=>'pratique collective','formation musicale'=>'formation musicale')))
            ->add('nom', null, array('label'  => 'Nom  Act :'))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'EcoleDeMusique\WelcomeBundle\Entity\Activite'
        ));
    }

    public function getName()
    {
        return 'ecoledemusique_welcomebundle_activitetype';
    }
}
