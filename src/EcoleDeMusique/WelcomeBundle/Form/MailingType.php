<?php

namespace EcoleDeMusique\WelcomeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;


class MailingType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
                    $tab=$builder->getData()->getNomActivite();
                    $builder->add('nomActivite','text', array('required' => false,'read_only' => true))
                            ->add('activiteEleves','entity', array(
    						'class'    => 'EcoleDeMusiqueWelcomeBundle:ActiviteEleve',
    						'property' => 'label',
    						'multiple' =>true,
    						'required' => true,
                        'query_builder' => function(EntityRepository $er) use ($tab){
                        if ($tab=='Toutes les activités'){
                            return $er->createQueryBuilder('e')
                                        ->innerJoin('e.activite','act')->innerJoin('e.eleve','elv')
                                        ->groupBy('elv.nom','elv.prenom')
                                        ->addSelect('act');
                         }else {
                             return $er->createQueryBuilder('e')
                                        ->innerJoin('e.activite','act')->innerJoin('e.eleve','elv')
                                        ->groupBy('elv.nom','elv.prenom')
                                        ->addSelect('act')
                                        ->where('act.nom LIKE :nom')                                   
                                        ->setParameter('nom','%'.$tab.'%');
                         }
                         
                         }
   				))
                    ->add('titre','text',array('required' => true))
                    ->add('message', 'textarea', array('required' => false));
     }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'EcoleDeMusique\WelcomeBundle\Entity\Mailing'
        ));
    }

    public function getName()
    {
        return 'ecoledemusique_welcomebundle_mailingtype';
    }
}
