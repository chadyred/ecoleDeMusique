<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FormulaireRegie
 *
 * @author paccalfl
 */

namespace EcoleDeMusique\WelcomeBundle\Form;
use Symfony\Component\Form\FormBuilder;



class FormulaireRegie {
   
      public function buildForm(FormBuilder $builder)
    {
          $annee="".date("Y");
          $anneeMoinsUn="".date("Y")-1;
          $anneePlusUn="".date("Y")+1;
          $anneePlusDeux="".date("Y")+2;
         
          
             $builder
                    ->add('nom')
                    ->add('capv','choice',array('choices'=>array('oui'=>'oui','non'=>'non')))
                    ->add('ea','choice',array('choices'=>array('enfant'=>'enfant','adulte'=>'adulte')))
                    ->add('cycle','choice',array('choices'=>
                        array('eveil musical'=>'eveil musical','cycle 1'=>'cycle 1','cycle 2'=>'cycle 2',
                            'cycle 3'=>'cycle 3')))
                    ->add('instru2','choice',array('choices'=>array('non'=>'non','intru2cycle1'=>'intru2cycle1','intru2cycle2'=>'intru2cycle2','intru2cycle3'=>'intru2cycle3')))
                    ->add('instru3','choice',array('choices'=>array('non'=>'non','intru3cycle1'=>'intru3cycle1','intru3cycle2'=>'intru3cycle2','intru3cycle3'=>'intru3cycle3')))
                    ->add('anneDeCours','choice',array('choices'=>array(
                        $annee=>$annee."/".$anneePlusUn,
                        $anneeMoinsUn=>$anneeMoinsUn."/".$annee,
                        $anneePlusUn=>$anneePlusUn."/".$anneePlusDeux
                        )))
                     ;
             return $builder->getForm();
    }
    
    
    
    
}

?>
