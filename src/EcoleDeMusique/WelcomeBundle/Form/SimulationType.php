<?php

namespace EcoleDeMusique\WelcomeBundle\Form;

use Symfony\Component\Form\FormBuilder;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;


class SimulationType
{
    public function buildForm(FormBuilder $builder/*, array $options*/)
    {
        $builder
               ->add('capv','choice',array('choices'=>array('oui'=>'oui','non'=>'non')))
               ->add('ea','choice',array('choices'=>array('enfant'=>'enfant','adulte'=>'adulte')))
               ->add('cycle','choice',array('choices'=>
                       array('eveil musical'=>'eveil musical','cycle 1'=>'cycle 1','cycle 2'=>'cycle 2',
                            'cycle 3'=>'cycle 3')))
                ->add('instru2','choice',array('choices'=>array('non'=>'non','intru2cycle1'=>'intru2cycle1','intru2cycle2'=>'intru2cycle2','intru2cycle3'=>'intru2cycle3')))
                ->add('instru3','choice',array('choices'=>array('non'=>'non','intru3cycle1'=>'intru3cycle1','intru3cycle2'=>'intru3cycle2','intru3cycle3'=>'intru3cycle3')))
                ->add('qf','integer',array('required'=>false))
            ->add('nbeleve','integer')
        ;
        
         return $builder->getForm();
    }

   
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'EcoleDeMusique\WelcomeBundle\Entity\Regie'
        ));
    }

    public function getName()
    {
        return 'ecoledemusique_welcomebundle_simulationtype';
    }
}

?>
