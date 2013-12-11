<?php

namespace EcoleDeMusique\WelcomeBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use EcoleDeMusique\WelcomeBundle\Entity\Cours;
use EcoleDeMusique\WelcomeBundle\Entity\CoursEleve;
use EcoleDeMusique\WelcomeBundle\Form\CoursType;
/**
 * Cours controller.
 *
 */
class CoursController extends Controller
{
    /**
     * Lists all Cours entities.
     *
     */
    public function indexAction()
    {
       $em = $this->getDoctrine()->getManager();
         
       
    
       
    if(isset($_GET["name"]))
        $name= $_GET["name"];  
    else 
        $name="";
    
        
    if(isset($_GET["change"]) && $_GET["change"]=="oui")
    {
        $name="";
    }
    
        
       if(isset($_GET["mode"]))
           {$mode= $_GET["mode"];}else{$mode="individuel"; }
           
           
           

            $entities=array();
        if($mode=="individuel")
        {
            $listSelect = $em->createQuery('SELECT e FROM EcoleDeMusiqueWelcomeBundle:Eleve e order by e.nom')->getResult();
            
            
            if($name!="")
            {    
                    //Selection liste cours en fonction d'une élève
                    $entities = $this->getDoctrine()->getManager()->getRepository('EcoleDeMusiqueWelcomeBundle:CoursEleve')->findByEleve($em->getRepository('EcoleDeMusiqueWelcomeBundle:Eleve')->find(intval($name)));
            } 
            else
            {
               $entities = $this->getDoctrine()->getManager()->createQuery('SELECT e FROM EcoleDeMusiqueWelcomeBundle:Eleve e order by e.nom')->getResult();
               if($entities!=null)
               {
                    $entities= $this->getDoctrine()->getManager()->getRepository('EcoleDeMusiqueWelcomeBundle:CoursEleve')->findByEleve($entities[0]);
               }
            }
            
            
        }
        
        if($mode=="salle")
        {
            $listSelect = $em->createQuery('SELECT e FROM EcoleDeMusiqueWelcomeBundle:Salle e order by e.nom')->getResult();
            
            
             if($name!="")
            {    
                     //Selection liste cours en fonction d'une salle
                     $entities = $em->getRepository('EcoleDeMusiqueWelcomeBundle:Cours')->findBySalle($em->getRepository('EcoleDeMusiqueWelcomeBundle:Salle')->find(intval($name)));      
            } 
            else
            {
               $entities = $this->getDoctrine()->getManager()->createQuery('SELECT e FROM EcoleDeMusiqueWelcomeBundle:Salle e order by e.nom')->getResult();
               
               if($entities!=null)
              {
                    $entities= $this->getDoctrine()->getManager()->getRepository('EcoleDeMusiqueWelcomeBundle:Cours')->findBySalle($entities[0]);
              }
            }
        }
        
       
         if($mode=="prof")
        {
             $listSelect = $em->createQuery('SELECT e FROM EcoleDeMusiqueWelcomeBundle:Prof e order by e.nom')->getResult();
             
             
              if($name!="")
            {    
                    //Selection liste cours en fonction d'une élève
                     $entities = $em->getRepository('EcoleDeMusiqueWelcomeBundle:Cours')->findByProf($em->getRepository('EcoleDeMusiqueWelcomeBundle:Prof')->find(intval($name)));
            } 
            else
            {
               $entities = $this->getDoctrine()->getManager()->createQuery('SELECT e FROM EcoleDeMusiqueWelcomeBundle:Prof e order by e.nom')->getResult();
               
               if($entities!=null)
               {
                 $entities= $this->getDoctrine()->getManager()->getRepository('EcoleDeMusiqueWelcomeBundle:Cours')->findByProf($entities[0]);
               }
                
            }
        }

       

        return $this->render('EcoleDeMusiqueWelcomeBundle:Cours:index.html.twig', array(
            'entities' => $entities,"mode"=>$mode,"listselect"=>$listSelect,'name'=>$name
        ));
    }

    /**
     * Finds and displays a Cours entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EcoleDeMusiqueWelcomeBundle:Cours')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Cours entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EcoleDeMusiqueWelcomeBundle:Cours:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    
    public function collectifAction()
    {       
  
        $em = $this->getDoctrine()->getManager();
        
        $formeuh["prof"]="";
        $formeuh["activite"]="";
        $formeuh["salle"]="";
        $formeuh["heure"]["hour"]=8;
        $formeuh["heure"]["minute"]=0;
        $formeuh["jour"]=10;
        $formeuh["duree"]["hour"]=0;
        $formeuh["duree"]["minute"]=0;
        

        $AllActivities=$em->getRepository('EcoleDeMusiqueWelcomeBundle:Activite')->findBy(array("categorie"=>array("pratique collective","formation musicale")));
        
    //    var_dump($AllActivities);
   
        $listeActivite=array();
        foreach($AllActivities as $AllActivities)
        {

                $actControl=$em->getRepository('EcoleDeMusiqueWelcomeBundle:ActiviteEleve')->findOneByActivite($AllActivities->getId());
   
                if($actControl!=null)
                {
                    
                    $listeActivite[]=$actControl->getActivite();
                }
        }

             return $this->render('EcoleDeMusiqueWelcomeBundle:Cours:newCollectif.html.twig',array(
            'listeEleve' => $em->getRepository('EcoleDeMusiqueWelcomeBundle:Eleve')->findAll(),
            'listeProf' => $em->getRepository('EcoleDeMusiqueWelcomeBundle:Prof')->findAll(),
            'listeSalle' => $em->getRepository('EcoleDeMusiqueWelcomeBundle:Salle')->findAll(),  
            'listeActivite' => $listeActivite,
            'control'=>$formeuh
        ));
    }
    
    public function createCollectifAction(Request $request)
    {
            $formeuh = $request->request->get("ecoledemusique_welcomebundle_courstype");
            $em = $this->getDoctrine()->getManager();
        
                                if($formeuh['prof']=="" || $formeuh['activite']=="" || $formeuh['salle']=="" )
                                {
                                   $this->get('session')->getFlashBag()->add('notice', "Veuillez bien saisir tout les champs");
                                    
                                }
                                else  
                                {     
                                            //Mise en forme heure minute
                                            $minuteFin=intval($formeuh['heure']["minute"])+intval($formeuh['duree']["minute"]);
                                            $heureFin=intval($formeuh['heure']["hour"])+intval($formeuh['duree']["hour"]);
                                             
                                            if($minuteFin>=60)
                                            {
                                                $minuteFin=$minuteFin-60;
                                                $heureFin=$heureFin+1;
                                                
                                            } 
                                            $heureFinChaine=(string)$heureFin;
                                            $minuteFinChaine=(string)$minuteFin;
                                            
                                            
                                            
                                            //Verifications si il n'y a pas déjà déjà un cours sur cette tranche horraire 
                                            $message="";
                                            $controle=1;
                                            
                         
                                             if($heureFin>22)
                                            {
                                               
                       
                                                    $controle=0;
                                                    $message="Votre cours fini au dela de 22h, tu veux te prendre un tapage nocturne ou quoi ???";
                                            }
                                            else
                                            {              
                                                
                                                            if($formeuh['duree']["minute"]=="0" && $formeuh['duree']["hour"]=="0")
                                                            {
                                                                $controle=0;
                                                                $message="Vous pouvez pas prendre un cours d'une durée nulle... Ne soyez pas bête !";
                                                                
                                                            }
                                                
                                                
                                                       
                                                                    //Dans la salle en question.....
                                                                $coursSalle = $em->getRepository('EcoleDeMusiqueWelcomeBundle:Cours')->findBySalle($em->getRepository('EcoleDeMusiqueWelcomeBundle:Salle')->findById($formeuh['salle']));

                                                                foreach ($coursSalle as $coursSalle)
                                                                {
                                                                   if(($coursSalle->getdateDeb() <= new \DateTime("2013-06-".$formeuh['jour']." ".$formeuh['heure']["hour"].":".$formeuh['heure']["minute"].":00.00") && $coursSalle->getdateFin() >= new \DateTime("2013-06-".$formeuh['jour']." ".$formeuh['heure']["hour"].":".$formeuh['heure']["minute"].":00.00")) || ($coursSalle->getdateDeb() <= new \DateTime("2013-06-".$formeuh['jour']." ".$heureFinChaine.":".$minuteFinChaine.":00.00") && $coursSalle->getdateFin() > new \DateTime("2013-06-".$formeuh['jour']." ".$heureFinChaine.":".$minuteFinChaine.":00.00")) || ($coursSalle->getdateDeb()>=new \DateTime("2013-06-".$formeuh['jour']." ".$formeuh['heure']["hour"].":".$formeuh['heure']["minute"].":00.00") && $coursSalle->getdateFin()<=new \DateTime("2013-06-".$formeuh['jour']." ".$heureFinChaine.":".$minuteFinChaine.":00.00")))
                                                                   {
                                                                       $controle=0;

                                                                         if($message!="")
                                                                        {
                                                                            $message=$message." | ";   
                                                                        }

                                                                       $message="Salle occupé sur cette tranche horraire ".$coursSalle->getdateDeb()->format('H:i')." et ".$coursSalle->getdateFin()->format('H:i');

                                                                   }      
                                                                }
                                            
                                            

                                                                //Avec le prof en question.....

                                                                 $prof=$em->getRepository('EcoleDeMusiqueWelcomeBundle:Prof')->findById($formeuh['prof']);

                                                                 $coursProf = $em->getRepository('EcoleDeMusiqueWelcomeBundle:Cours')->findByProf($prof);

                                                                 foreach ($coursProf as $coursProf)
                                                                 {
                                                                    if(($coursProf->getdateDeb() <= new \DateTime("2013-06-".$formeuh['jour']." ".$formeuh['heure']["hour"].":".$formeuh['heure']["minute"].":00.00") && $coursProf->getdateFin() >= new \DateTime("2013-06-".$formeuh['jour']." ".$formeuh['heure']["hour"].":".$formeuh['heure']["minute"].":00.00")) || ($coursProf->getdateDeb() <= new \DateTime("2013-06-".$formeuh['jour']." ".$heureFinChaine.":".$minuteFinChaine.":00.00") && $coursProf->getdateFin() > new \DateTime("2013-06-".$formeuh['jour']." ".$heureFinChaine.":".$minuteFinChaine.":00.00")) || ($coursProf->getdateDeb()>=new \DateTime("2013-06-".$formeuh['jour']." ".$formeuh['heure']["hour"].":".$formeuh['heure']["minute"].":00.00") && $coursProf->getdateFin()<=new \DateTime("2013-06-".$formeuh['jour']." ".$heureFinChaine.":".$minuteFinChaine.":00.00")))
                                                                    {
                                                                        $controle=0; 

                                                                        if($message!="")
                                                                        {
                                                                            $message=$message." | ";   
                                                                        }

                                                                        $message=$message."Le Professeur ".$coursProf->getProf()->getNom()." ".$coursProf->getProf()->getPrenom()." occupé sur cette tranche horraire ".$coursProf->getdateDeb()->format('H:i')." et ".$coursProf->getdateFin()->format('H:i');

                                                                    }      
                                                                 }
                                                                 
                                                  //on check si tout les élèves sont libre sur cette tranche horraire           
                                                   $ActiviteEleve=$em->getRepository('EcoleDeMusiqueWelcomeBundle:ActiviteEleve')->findAll();       
                                                   foreach ($ActiviteEleve as $ActiviteEleve)
                                                   {
                                                       
                                                       if($ActiviteEleve->getActivite()->getId()==intval($formeuh['activite']))
                                                       {

                                                                        //Avec les eleve en question.....
                                                                            $courseeElev = $em->getRepository('EcoleDeMusiqueWelcomeBundle:CoursEleve')->findByEleve($ActiviteEleve->getEleve());

                                                                        foreach ($courseeElev as $courseeElev)
                                                                        {
                                                                           if(($courseeElev->getCours()->getdateDeb() <= new \DateTime("2013-06-".$formeuh['jour']." ".$formeuh['heure']["hour"].":".$formeuh['heure']["minute"].":00.00") && $courseeElev->getCours()->getdateFin() >= new \DateTime("2013-06-".$formeuh['jour']." ".$formeuh['heure']["hour"].":".$formeuh['heure']["minute"].":00.00")) || ($courseeElev->getCours()->getdateDeb() <= new \DateTime("2013-06-".$formeuh['jour']." ".$heureFinChaine.":".$minuteFinChaine.":00.00") && $courseeElev->getCours()->getdateFin() > new \DateTime("2013-06-".$formeuh['jour']." ".$heureFinChaine.":".$minuteFinChaine.":00.00")) || ($courseeElev->getCours()->getdateDeb()>=new \DateTime("2013-06-".$formeuh['jour']." ".$formeuh['heure']["hour"].":".$formeuh['heure']["minute"].":00.00") && $courseeElev->getCours()->getdateFin()<=new \DateTime("2013-06-".$formeuh['jour']." ".$heureFinChaine.":".$minuteFinChaine.":00.00")))
                                                                           {
                                                                               $controle=0; 

                                                                                if($message!="")
                                                                               {
                                                                                   $message=$message." | ";   
                                                                               }

                                                                               $message=$message."L'élève".$ActiviteEleve->getEleve()->getNom()." ".$ActiviteEleve->getEleve()->getPrenom()." est déjà occupé entre ".$courseeElev->getCours()->getdateDeb()->format('H:i')." et ".$courseeElev->getCours()->getdateFin()->format('H:i');

                                                                           }      
                                                                        }
                                                       }
                                                   }
                                                                 
                                            }
                                                if($controle==0)
                                               {
                                                    $this->get('session')->getFlashBag()->add('notice',$message);
                                               }
                                                else 
                                               {
                                                    $ActiviteEleve=$em->getRepository('EcoleDeMusiqueWelcomeBundle:ActiviteEleve')->findAll();
                                                    
                                                   $entity  = new Cours();

                                                   $entity->setDateDeb(new \DateTime("2013-06-".$formeuh['jour']." ".$formeuh['heure']["hour"].":".$formeuh['heure']["minute"].":00.00"));
                                                   $entity->setDateFin(new \DateTime("2013-06-".$formeuh['jour']." ".$heureFinChaine.":".$minuteFinChaine.":00.00"));

                                                         
                                                   $entity->setSalle($em->getRepository('EcoleDeMusiqueWelcomeBundle:Salle')->findOneById($formeuh['salle']));
                                                   $entity->setActivite($em->getRepository('EcoleDeMusiqueWelcomeBundle:Activite')->findOneById($formeuh['activite']));
                                                   $entity->setProf($em->getRepository('EcoleDeMusiqueWelcomeBundle:Prof')->findOneById($formeuh['prof']));
                                                   $em->persist($entity);
                                                    
                                                    
                                                   foreach ($ActiviteEleve as $ActiviteEleve)
                                                   {
                                                       
                                                       if($ActiviteEleve->getActivite()->getId()==intval($formeuh['activite']))
                                                       {
                                                            //Enregistrement .....
                                                            
                                                    
                                                            
                                                            $CoursEleve  = new CoursEleve();
                                                            $CoursEleve->setcours($entity);
                                                            $CoursEleve->setEleve($ActiviteEleve->getEleve());
                                                            
                                                          
                                                            $em->persist($CoursEleve);
                                                            $em->flush();
                                                            
                                                            $this->get('session')->getFlashBag()->add('notice',"Cours enregistré avec succés");

                                                           
                                                      }   
                                                   }
                                                         
                                                 
                                               }
                                }
                 return $this->render('EcoleDeMusiqueWelcomeBundle:Cours:newCollectif.html.twig', array(
                'listeEleve' => $em->getRepository('EcoleDeMusiqueWelcomeBundle:Eleve')->findAll(),
                'listeProf' => $em->getRepository('EcoleDeMusiqueWelcomeBundle:Prof')->findAll(),
                'listeSalle' => $em->getRepository('EcoleDeMusiqueWelcomeBundle:Salle')->findAll(),  
                'listeActivite' => $em->getRepository('EcoleDeMusiqueWelcomeBundle:Activite')->findAll(),
                'control'=>$formeuh
            ));
        
        
        
    }
    
    
    
    
    
    /**
     * Displays a form to create a new Cours entity.
     *
     */
    public function newAction()
    {
        
        $em = $this->getDoctrine()->getManager();
      //  $listeEleve = $em->getRepository('EcoleDeMusiqueWelcomeBundle:Eleve')->findAll();
        
        $formeuh["eleve"]="";
        $formeuh["prof"]="";
        $formeuh["activite"]="";
        $formeuh["salle"]="";
        $formeuh["heure"]["hour"]=8;
        $formeuh["heure"]["minute"]=0;
        $formeuh["jour"]=10;
        $formeuh["duree"]["hour"]=0;
        $formeuh["duree"]["minute"]=0;
        $entity = new Cours();
        $form   = $this->createForm(new CoursType());
        
        
        $eleves=$em->getRepository('EcoleDeMusiqueWelcomeBundle:Eleve')->findAll();
        $listeActivite= null;
            $ActiviteEleve = $em->createQuery('SELECT e FROM EcoleDeMusiqueWelcomeBundle:ActiviteEleve e group by e.activite')->getResult();
            foreach($ActiviteEleve as $actEleve){
                if($actEleve->getActivite()->getCategorie()=="instrument"){
                     $listeActivite[]=$actEleve->getActivite();
                }
           
        }
            return $this->render('EcoleDeMusiqueWelcomeBundle:Cours:new.html.twig', array(
            'form'   => $form->createView(),
            'listeEleve' => $eleves,
            'listeProf' => $em->getRepository('EcoleDeMusiqueWelcomeBundle:Prof')->findAll(),
            'listeSalle' => $em->getRepository('EcoleDeMusiqueWelcomeBundle:Salle')->findAll(),  
            'listeActivite' => $listeActivite,
            'control'=>$formeuh
        ));
    }
    
    
    public function rechargeActiviteAction(Request $request)
    {
        $formeuh = $request->request->get("ecoledemusique_welcomebundle_courstype");
        $formeuh["eleve"]=$_POST['eleve'];
        
        $em = $this->getDoctrine()->getManager();
        $ActiviteEleve = $em->getRepository('EcoleDeMusiqueWelcomeBundle:ActiviteEleve')->findByEleve($em->getRepository('EcoleDeMusiqueWelcomeBundle:Eleve')->find($formeuh["eleve"]));
     
        
        $listeActivite=null;
        foreach($ActiviteEleve as $ActiviteEleve)
        {
            if($ActiviteEleve->getActivite()->getcategorie()=="instrument")
            {
                $listeActivite[]=$ActiviteEleve->getActivite();
            }
        }

        
        $form   = $this->createForm(new CoursType());
        return $this->render('EcoleDeMusiqueWelcomeBundle:Cours:new.html.twig', array(
            'form'   => $form->createView(),
            'listeEleve' => $em->getRepository('EcoleDeMusiqueWelcomeBundle:Eleve')->findAll("ORDER BY nom ASC"),
            'listeProf' => $em->getRepository('EcoleDeMusiqueWelcomeBundle:Prof')->findAll("ORDER BY nom ASC"),
            'listeSalle' => $em->getRepository('EcoleDeMusiqueWelcomeBundle:Salle')->findAll("ORDER BY nom ASC"),  
            'listeActivite' => $listeActivite,
            'control'=>$formeuh
        ));
        
    }

    /**
     * Creates a new Cours entity.
     *
     */
    public function createAction(Request $request)
    {
       $formeuh = $request->request->get("ecoledemusique_welcomebundle_courstype");
       $formeuh["eleve"]=$_POST['eleve'];
        
       $em = $this->getDoctrine()->getManager();
       $eleve = $em->getRepository('EcoleDeMusiqueWelcomeBundle:Eleve')->findOneById($formeuh["eleve"]);
       $form   = $this->createForm(new CoursType());  
         
   
            

  
                                //Verif que le form est plein 
                                if($formeuh['prof']=="" || $formeuh['activite']=="" || $formeuh['salle']=="" )
                                {
                                   $this->get('session')->getFlashBag()->add('notice', "Veuillez bien saisir tout les champs");
                                    
                                }
                                else
                                    
                                {     
                                            //Mise en forme heure minute
                                            $minuteFin=intval($formeuh['heure']["minute"])+intval($formeuh['duree']["minute"]);
                                            $heureFin=intval($formeuh['heure']["hour"])+intval($formeuh['duree']["hour"]);
                                             
                                            if($minuteFin>=60)
                                            {
                                                $minuteFin=$minuteFin-60;
                                                $heureFin=$heureFin+1;
                                                
                                            } 
                                            $heureFinChaine=(string)$heureFin;
                                            $minuteFinChaine=(string)$minuteFin;
                                            
                                            
                                            
                                            //Verifications si il n'y a pas déjà déjà un cours sur cette tranche horraire 
                                            $message="";
                                            $controle=1;
                                            
                         
                                             if($heureFin>22)
                                            {
                                               
                       
                                                    $controle=0;
                                                    $message="Votre cours fini au dela de 22h, tu veux te prendre un tapage nocturne ou quoi ???";
                                            }
                                            else
                                            {              
                                                
                                                            if($formeuh['duree']["minute"]=="0" && $formeuh['duree']["hour"]=="0")
                                                            {
                                                                $controle=0;
                                                                $message="Vous pouvez pas prendre un cours d'une durée nulle... Ne soyez pas bête !";
                                                                
                                                            }
                                                
                                                
                                                       
                                                                    //Dans la salle en question.....
                                                                $coursSalle = $em->getRepository('EcoleDeMusiqueWelcomeBundle:Cours')->findBySalle($em->getRepository('EcoleDeMusiqueWelcomeBundle:Salle')->findById($formeuh['salle']));

                                                                foreach ($coursSalle as $coursSalle)
                                                                {
                                                                   if(($coursSalle->getdateDeb() <= new \DateTime("2013-06-".$formeuh['jour']." ".$formeuh['heure']["hour"].":".$formeuh['heure']["minute"].":00.00") && $coursSalle->getdateFin() >= new \DateTime("2013-06-".$formeuh['jour']." ".$formeuh['heure']["hour"].":".$formeuh['heure']["minute"].":00.00")) || ($coursSalle->getdateDeb() <= new \DateTime("2013-06-".$formeuh['jour']." ".$heureFinChaine.":".$minuteFinChaine.":00.00") && $coursSalle->getdateFin() > new \DateTime("2013-06-".$formeuh['jour']." ".$heureFinChaine.":".$minuteFinChaine.":00.00")) || ($coursSalle->getdateDeb()>=new \DateTime("2013-06-".$formeuh['jour']." ".$formeuh['heure']["hour"].":".$formeuh['heure']["minute"].":00.00") && $coursSalle->getdateFin()<=new \DateTime("2013-06-".$formeuh['jour']." ".$heureFinChaine.":".$minuteFinChaine.":00.00")))
                                                                   {
                                                                       $controle=0;

                                                                         if($message!="")
                                                                        {
                                                                            $message=$message." | ";   
                                                                        }

                                                                       $message="Salle occupé sur cette tranche horraire ".$coursSalle->getdateDeb()->format('H:i')." et ".$coursSalle->getdateFin()->format('H:i');

                                                                   }      
                                                                }
                                            
                                            

                                                                //Avec le prof en question.....

                                                                 $prof=$em->getRepository('EcoleDeMusiqueWelcomeBundle:Prof')->findById($formeuh['prof']);

                                                                 $coursProf = $em->getRepository('EcoleDeMusiqueWelcomeBundle:Cours')->findByProf($prof);

                                                                 foreach ($coursProf as $coursProf)
                                                                 {
                                                                    if(($coursProf->getdateDeb() <= new \DateTime("2013-06-".$formeuh['jour']." ".$formeuh['heure']["hour"].":".$formeuh['heure']["minute"].":00.00") && $coursProf->getdateFin() >= new \DateTime("2013-06-".$formeuh['jour']." ".$formeuh['heure']["hour"].":".$formeuh['heure']["minute"].":00.00")) || ($coursProf->getdateDeb() <= new \DateTime("2013-06-".$formeuh['jour']." ".$heureFinChaine.":".$minuteFinChaine.":00.00") && $coursProf->getdateFin() > new \DateTime("2013-06-".$formeuh['jour']." ".$heureFinChaine.":".$minuteFinChaine.":00.00")) || ($coursProf->getdateDeb()>=new \DateTime("2013-06-".$formeuh['jour']." ".$formeuh['heure']["hour"].":".$formeuh['heure']["minute"].":00.00") && $coursProf->getdateFin()<=new \DateTime("2013-06-".$formeuh['jour']." ".$heureFinChaine.":".$minuteFinChaine.":00.00")))
                                                                    {
                                                                        $controle=0; 

                                                                        if($message!="")
                                                                        {
                                                                            $message=$message." | ";   
                                                                        }

                                                                        $message=$message."Le Professeur ".$coursProf->getProf()->getNom()." ".$coursProf->getProf()->getPrenom()." occupé sur cette tranche horraire ".$coursProf->getdateDeb()->format('H:i')." et ".$coursProf->getdateFin()->format('H:i');

                                                                    }      
                                                                 }

                                                                 //Avec le prof en question.....
                                                                     $courseeElev = $em->getRepository('EcoleDeMusiqueWelcomeBundle:CoursEleve')->findByEleve($eleve);

                                                                 foreach ($courseeElev as $courseeElev)
                                                                 {
                                                                    if(($courseeElev->getCours()->getdateDeb() <= new \DateTime("2013-06-".$formeuh['jour']." ".$formeuh['heure']["hour"].":".$formeuh['heure']["minute"].":00.00") && $courseeElev->getCours()->getdateFin() >= new \DateTime("2013-06-".$formeuh['jour']." ".$formeuh['heure']["hour"].":".$formeuh['heure']["minute"].":00.00")) || ($courseeElev->getCours()->getdateDeb() <= new \DateTime("2013-06-".$formeuh['jour']." ".$heureFinChaine.":".$minuteFinChaine.":00.00") && $courseeElev->getCours()->getdateFin() > new \DateTime("2013-06-".$formeuh['jour']." ".$heureFinChaine.":".$minuteFinChaine.":00.00")) || ($courseeElev->getCours()->getdateDeb()>=new \DateTime("2013-06-".$formeuh['jour']." ".$formeuh['heure']["hour"].":".$formeuh['heure']["minute"].":00.00") && $courseeElev->getCours()->getdateFin()<=new \DateTime("2013-06-".$formeuh['jour']." ".$heureFinChaine.":".$minuteFinChaine.":00.00")))
                                                                    {
                                                                        $controle=0; 

                                                                         if($message!="")
                                                                        {
                                                                            $message=$message." | ";   
                                                                        }

                                                                        $message=$message."L'élève".$eleve->getNom()." ".$eleve->getPrenom()." est déjà occupé entre ".$courseeElev->getCours()->getdateDeb()->format('H:i')." et ".$courseeElev->getCours()->getdateFin()->format('H:i');

                                                                    }      
                                                                 }
                                            }
                                            
                                           if($controle==0)
                                           {
                                                $this->get('session')->getFlashBag()->add('notice',$message);
                                           }
                                            else 
                                           {
                                                        //Enregistrement .....
                                                        $entity  = new Cours();

                                                        $entity->setDateDeb(new \DateTime("2013-06-".$formeuh['jour']." ".$formeuh['heure']["hour"].":".$formeuh['heure']["minute"].":00.00"));
                                                        $entity->setDateFin(new \DateTime("2013-06-".$formeuh['jour']." ".$heureFinChaine.":".$minuteFinChaine.":00.00"));

                                                        $entity->setSalle($em->getRepository('EcoleDeMusiqueWelcomeBundle:Salle')->findOneById($formeuh['salle']));
                                                        $entity->setActivite($em->getRepository('EcoleDeMusiqueWelcomeBundle:Activite')->findOneById($formeuh['activite']));
                                                        $entity->setProf($em->getRepository('EcoleDeMusiqueWelcomeBundle:Prof')->findOneById($formeuh['prof']));


                                                        $CoursEleve  = new CoursEleve();
                                                        $CoursEleve->setcours($entity);
                                                        $CoursEleve->setEleve($eleve);


                                                        $em->persist($entity);
                                                        $em->persist($CoursEleve);
                                                        $em->flush();
                                                        
                                                        $this->get('session')->getFlashBag()->add('notice',"Cours enregistré avec succés");
                                             
                                          }
                                            
                                }
      
                                
                                
        $eleves=$em->getRepository('EcoleDeMusiqueWelcomeBundle:Eleve')->findAll();
        $ActiviteEleve = $em->getRepository('EcoleDeMusiqueWelcomeBundle:ActiviteEleve')->findByEleve($em->getRepository('EcoleDeMusiqueWelcomeBundle:Eleve')->findById($formeuh["eleve"]));
        $listeActivite=null;
        foreach($ActiviteEleve as $ActiviteEleve)
        {
            if($ActiviteEleve->getActivite()->getcategorie()=="instrument")
            {
                $listeActivite[]=$ActiviteEleve->getActivite();
            }
        }     
                                
                                
                                
                                
            return $this->render('EcoleDeMusiqueWelcomeBundle:Cours:new.html.twig', array(
            'form'   => $form->createView(),
            'listeEleve' => $eleves,
            'listeProf' => $em->getRepository('EcoleDeMusiqueWelcomeBundle:Prof')->findAll(),
            'listeSalle' => $em->getRepository('EcoleDeMusiqueWelcomeBundle:Salle')->findAll(),  
            'listeActivite' => $listeActivite,
            'control'=>$formeuh
        ));
    }

    /**
     * Displays a form to edit an existing Cours entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EcoleDeMusiqueWelcomeBundle:Cours')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Cours entity.');
        }

        $editForm = $this->createForm(new CoursType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EcoleDeMusiqueWelcomeBundle:Cours:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Cours entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        
        
     
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EcoleDeMusiqueWelcomeBundle:Cours')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Cours entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new CoursType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('cours_edit', array('id' => $id)));
        }

        return $this->render('EcoleDeMusiqueWelcomeBundle:Cours:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Cours entity.
     *
     */
    public function deleteAction(Request $request, $id,$mode,$name)
    {

          $em = $this->getDoctrine()->getManager();   
        
        /*suppression*/
            $entity = $em->getRepository('EcoleDeMusiqueWelcomeBundle:Cours')->find($id);
            
            $control=0;
            
            if($mode=="individuel")
            {
                $coursEleve = $em->getRepository('EcoleDeMusiqueWelcomeBundle:CoursEleve')->findByCours($entity);
                $control=sizeof($em->getRepository('EcoleDeMusiqueWelcomeBundle:CoursEleve')->findAll());
                 
                $control2=sizeof($coursEleve);
            }
            else 
            {
                $coursEleve = $em->getRepository('EcoleDeMusiqueWelcomeBundle:CoursEleve')->findByCours($id);
            }
            
            
            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Cours entity.');
            }
            
            
  
  
            foreach ($coursEleve as $coursEleve)
            {
                if($mode=="individuel" && ($entity->getActivite()->getCategorie()=="pratique collective" || $entity->getActivite()->getCategorie()=="formation musicale"))
                { 
                    if($coursEleve->getEleve()->getId()==intval($name))
                    {
                        $em->remove($coursEleve);  
                    } 
                }
                else
                {
                    $em->remove($coursEleve);  
                }
            }

            
           
            if($control==1 || $mode=="individuel" || $mode=="prof" || $mode="salle")
            {
               
                if($mode=="individuel" && ($entity->getActivite()->getCategorie()=="pratique collective" || $entity->getActivite()->getCategorie()=="formation musicale"))
                { 
                        if($control2==1)
                        {
                               $em->remove($entity);
                        }
                }
                else
                {
                    $em->remove($entity);
                }
            }
            
            $em->flush();
        
         
            
            
            
            /*remise en place du template*/
        if(isset($name))
             $name= $name;  
        else 
             $name="";
            
        if(!isset($mode))
        {$mode="individuel";}

            

            $entities=array();
        if($mode=="individuel")
        {
            $listSelect = $em->getRepository('EcoleDeMusiqueWelcomeBundle:Eleve')->findAll();
            
            
            if($name!="")
            {    
                    //Selection liste cours en fonction d'une élève
                    $entities = $this->getDoctrine()->getManager()->getRepository('EcoleDeMusiqueWelcomeBundle:CoursEleve')->findByEleve($em->getRepository('EcoleDeMusiqueWelcomeBundle:Eleve')->find(intval($name)));
            } 
            else
            {
               $entities = $this->getDoctrine()->getManager()->getRepository('EcoleDeMusiqueWelcomeBundle:Eleve')->findAll();
               $entities= $this->getDoctrine()->getManager()->getRepository('EcoleDeMusiqueWelcomeBundle:CoursEleve')->findByEleve($entities[0]);
            }
            
            
        }
        
        if($mode=="salle")
        {
            $listSelect = $em->getRepository('EcoleDeMusiqueWelcomeBundle:Salle')->findAll();
            
            
             if($name!="")
            {    
                     //Selection liste cours en fonction d'une salle
                     $entities = $em->getRepository('EcoleDeMusiqueWelcomeBundle:Cours')->findBySalle($em->getRepository('EcoleDeMusiqueWelcomeBundle:Salle')->find(intval($name)));      
            } 
            else
            {
               $entities = $this->getDoctrine()->getManager()->getRepository('EcoleDeMusiqueWelcomeBundle:Salle')->findAll();
               $entities= $this->getDoctrine()->getManager()->getRepository('EcoleDeMusiqueWelcomeBundle:Cours')->findBySalle($entities[0]);
                
            }
        }
        
       
         if($mode=="prof")
        {
             $listSelect = $em->getRepository('EcoleDeMusiqueWelcomeBundle:Prof')->findAll();
             
             
              if($name!="")
            {    
                    //Selection liste cours en fonction d'une élève
                     $entities = $em->getRepository('EcoleDeMusiqueWelcomeBundle:Cours')->findByProf($em->getRepository('EcoleDeMusiqueWelcomeBundle:Prof')->find(intval($name)));
            } 
            else
            {
               $entities = $this->getDoctrine()->getManager()->getRepository('EcoleDeMusiqueWelcomeBundle:Prof')->findAll();
               $entities= $this->getDoctrine()->getManager()->getRepository('EcoleDeMusiqueWelcomeBundle:Cours')->findByProf($entities[0]);
                
            }
        }           

         return $this->render('EcoleDeMusiqueWelcomeBundle:Cours:index.html.twig', array(
            'entities' => $entities,"mode"=>$mode,"listselect"=>$listSelect,'name'=>$name
        ));
         
  
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
