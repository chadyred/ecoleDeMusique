<?php

namespace EcoleDeMusique\WelcomeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;
class RechercheEleveType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('activiteEleve', 'entity', array(
    						'class'    => 'EcoleDeMusiqueWelcomeBundle:Activite',
    						'property' => 'nom',
    						'multiple' =>false,
    						'required' => false,
                                                'empty_value' => 'Toutes les activités',
                'query_builder' => function(EntityRepository $er) {
    				return $er->createQueryBuilder('c')->orderBy('c.nom', 'ASC')->groupby('c.nom');
   				}
    		));
            
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'EcoleDeMusique\WelcomeBundle\Entity\RechercheEleve'
        ));
    }

    public function getName()
    {
        return 'rechercheeleve';
    }
}
