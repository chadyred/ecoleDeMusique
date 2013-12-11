<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FormulaireFormule
 *
 * @author paccalfl
 */


namespace EcoleDeMusique\WelcomeBundle\Form;
use Symfony\Component\Form\FormBuilder;

class FormulaireFormule {

    public function buildForm($Formules,FormBuilder $builder)
    {
        
        
        
        foreach($Formules as $For)
        {
           $param1=$For->getParam1();
            $param2=$For->getParam2();
            $param3=$For->getParam3();
            $param4=$For->getParam4();
            $param5=$For->getParam5();
            $capv=$For->getcoefCapv();
            $instru2=$For->getcoefInstru2();
            $instru3=$For->getcoefInstru3();
            $c2e=$For->getcoef2eleves();
            $c3e=$For->getcoef3eleves();
            $c4e=$For->getcoef4eleves();
            $c5e=$For->getcoef5eleves();
            $cycle0=$For->getCoefcyle0();
            $cycle1=$For->getCoefcyle1();
            $cycle2=$For->getCoefcyle2();
            $cycle3=$For->getCoefcyle3();
            $formuleCalcul=$For->getFormule();
            $MultiplicateurAdulte=$For->getmultiplicateurAdulte();
            $tarifMax=$For->getTarifMax();

            
        }
            $builder   
                ->add('Formule0param1', 'number',array('data'=>$param1))
                ->add('Formule0param2', 'number',array('data'=>$param2))
                ->add('Formule0param3', 'number',array('data'=>$param3 ))
                ->add('Formule0param4', 'number',array('data'=>$param4))
                ->add('Formule0param5', 'number',array('data'=>$param5))
                ->add('capv', 'number',array('data'=>$capv))
                ->add('coefInstru2', 'number',array('data'=>$instru2))
                ->add('coefInstru3', 'number',array('data'=>$instru3))
                ->add('coef2eleves', 'number',array('data'=>$c2e))  
                ->add('coef3eleves', 'number',array('data'=>$c3e))  
                ->add('coef4eleves', 'number',array('data'=>$c4e))   
                ->add('coef5eleves', 'number',array('data'=>$c5e))
                ->add('cycle0', 'number',array('data'=>$cycle0))
                ->add('cycle1', 'number',array('data'=>$cycle1))
                ->add('cycle2', 'number',array('data'=>$cycle2))
                ->add('cycle3', 'number',array('data'=>$cycle3))
                ->add('FormuleCalcul','text',array('data'=>$formuleCalcul))
                ->add('MultiplicateurAdulte','text',array('data'=>$MultiplicateurAdulte)) 
                ->add('tarifMax','text',array('data'=>$tarifMax))
                       ;
            
               return $builder->getForm();

    }
    
    
    public function getName()
    {
        return 'Formules';
    }

    
}

?>
