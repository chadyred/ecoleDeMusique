<?php

namespace EcoleDeMusique\WelcomeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ActiviteEleveType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('eleve')
            ->add('type','choice',array("choices"=>array('instru1'=>'instru1','instru2'=>'instru2','instru3'=>'instru3','pratique collective'=>'pratique collective','formation musicale'=>'formation musicale')))
            ->add('activite')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'EcoleDeMusique\WelcomeBundle\Entity\ActiviteEleve'
        ));
    }

    public function getName()
    {
        return 'ecoledemusique_welcomebundle_activiteelevetype';
    }
}
