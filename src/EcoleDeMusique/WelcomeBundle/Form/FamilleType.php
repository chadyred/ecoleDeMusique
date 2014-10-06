<?php

namespace EcoleDeMusique\WelcomeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

class FamilleType extends AbstractType
{
    private $idFamille;

    public function __construct($idFamille)
    {
        $this->idFamille = $idFamille;
    }
        
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
        
        $builder
            ->add('qf')
              ->add('responsable', 'entity', array( 'class' => 'EcoleDeMusiqueWelcomeBundle:Eleve',
                    'property' => 'prenom',
                    'multiple' => false,
                    'required' => false,
                    'empty_value' => '-',
                    'empty_data' => null,
                    'query_builder' => function(EntityRepository $er) {
                return $er->createQueryBuilder('e')
                         ->where('e.famille = :idFamille')
                        ->setParameter('idFamille',  $this->idFamille);
            }));
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