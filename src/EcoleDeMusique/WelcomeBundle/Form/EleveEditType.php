<?php

namespace EcoleDeMusique\WelcomeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;





class EleveEditType extends AbstractType
{
    private $doc;
    private $ent;
    
    
     function __construct($entity) {
     $this->ent=$entity;
    }
    
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {      
        
  
        $Famille=$this->doc->getRepository('EcoleDeMusiqueWelcomeBundle:Famille')->findall();
    
        
        $tabFamilleCompose[""]="";
            foreach($Famille as $f)
            {          
                $Eleve=$this->doc->getRepository('EcoleDeMusiqueWelcomeBundle:Eleve')->findByFamille($f);
                
                $NomFamilleCompose="";
                $NomPrec[0]="";
 
                     foreach($Eleve as $e)
                     { 
                           $bool=0;
                            for($i=0;$i<count($NomPrec);$i++)
                            {
                                if($e->getNom()==$NomPrec[$i] && $bool==0)
                                {
                                    $bool=1;
                                }
                            }
                            if($bool==0)
                            {
                               $NomFamilleCompose=$NomFamilleCompose." ".$e->getNom();
                            }
                     
                         $NomPrec[count($NomPrec)]=$e->getNom();
                     }
                     
                     
                 //    echo $f->getid()."-".$NomFamilleCompose."<br />";
                     
                     
                     if($NomFamilleCompose==""){$NomFamilleCompose="Famille vide QF:".$f->getqf();}
                          $tabFamilleCompose[$f->getid().""]=$f;
                          

            }

              
      
        
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('adresse')
            ->add('codePostal')
            ->add('civilite','choice', array('choices' => array('Mr' => 'Mr', 'Mlle' => 'Mlle','Mme' => 'Mme')))
            ->add('telEleve','text',array('required'=>false))
            ->add('telMere','text',array('required'=>false))
            ->add('telPere','text',array('required'=>false))
            ->add('dateDeNaissance','date',array('years' => range(1902,2037),'format' => 'dd-MM-yyyy',))
            ->add('mail','text',array('required'=>false))
           ->add('ville')
        ->add('famille');  
    }
    
    
    public function setDoctrineObject($doc)
    {
        $this->doc=$doc;
    }
    
    
    
            

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'EcoleDeMusique\WelcomeBundle\Entity\Eleve'
        ));
    }

    public function getName()
    {
        return 'ecoledemusique_welcomebundle_eleveedittype';
    }
}
