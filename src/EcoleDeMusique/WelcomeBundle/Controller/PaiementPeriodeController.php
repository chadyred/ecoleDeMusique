<?php

namespace EcoleDeMusique\WelcomeBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use EcoleDeMusique\WelcomeBundle\Entity\PaiementPeriode;
use EcoleDeMusique\WelcomeBundle\Form\PaiementPeriodeType;

/**
 * PaiementPeriode controller.
 *
 */
class PaiementPeriodeController extends Controller
{
    /**
     * Lists all PaiementPeriode entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('EcoleDeMusiqueWelcomeBundle:PaiementPeriode')->findAll();

        return $this->render('EcoleDeMusiqueWelcomeBundle:PaiementPeriode:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Finds and displays a PaiementPeriode entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EcoleDeMusiqueWelcomeBundle:PaiementPeriode')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PaiementPeriode entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EcoleDeMusiqueWelcomeBundle:PaiementPeriode:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to create a new PaiementPeriode entity.
     *
     */
    public function newAction()
    {
        $entity = new PaiementPeriode();
        $form   = $this->createForm(new PaiementPeriodeType(), $entity);

        return $this->render('EcoleDeMusiqueWelcomeBundle:PaiementPeriode:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a new PaiementPeriode entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new PaiementPeriode();
        $form = $this->createForm(new PaiementPeriodeType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('paiementperiode_show', array('id' => $entity->getId())));
        }

        return $this->render('EcoleDeMusiqueWelcomeBundle:PaiementPeriode:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing PaiementPeriode entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EcoleDeMusiqueWelcomeBundle:PaiementPeriode')->find($id);
        
        $entity2 = $this->getDoctrine()->getManager()->getRepository('EcoleDeMusiqueWelcomeBundle:PaiementPeriode')->findOneBy(array("paiement"=>$entity->getPaiement(),"numPeriod"=>2));
        $entity3 = $this->getDoctrine()->getManager()->getRepository('EcoleDeMusiqueWelcomeBundle:PaiementPeriode')->findOneBy(array("paiement"=>$entity->getPaiement(),"numPeriod"=>3));
        $entity4 = $this->getDoctrine()->getManager()->getRepository('EcoleDeMusiqueWelcomeBundle:PaiementPeriode')->findOneBy(array("paiement"=>$entity->getPaiement(),"numPeriod"=>4));

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PaiementPeriode entity.');
        }
        

        
        //C'est pas propre de mettre ça ici mais je le met quand même car trop de galère 
                    $formArray = array(
                   0 => array('name' => 'dateNumeraire1', 'type' =>'date'),
                   1 => array('name' => 'dateChequeJeune1', 'type' =>'date'),
                   2 => array('name' => 'dateChequeVacance1', 'type' =>'date'), 
                   3 => array('name' => 'dateCheque1', 'type' =>'date'), 
                   4 => array('name' => 'dateCb1', 'type' =>'date'), 
                   5 => array('name' => 'datePrelev1', 'type' =>'date'),
                   6 => array('name' => 'dateNumeraire2', 'type' =>'date'),
                   7 => array('name' => 'dateChequeJeune2', 'type' =>'date'),
                   8 => array('name' => 'dateChequeVacance2', 'type' =>'date'), 
                   9 => array('name' => 'dateCheque2', 'type' =>'date'), 
                   10 => array('name' => 'dateCb2', 'type' =>'date'), 
                   11 => array('name' => 'datePrelev2', 'type' =>'date'),     
                   12 => array('name' => 'dateNumeraire3', 'type' =>'date'),
                   13 => array('name' => 'dateChequeJeune3', 'type' =>'date'),
                   14 => array('name' => 'dateChequeVacance3', 'type' =>'date'), 
                   15 => array('name' => 'dateCheque3', 'type' =>'date'), 
                   16 => array('name' => 'dateCb3', 'type' =>'date'), 
                   17 => array('name' => 'datePrelev3', 'type' =>'date'),     
                   18 => array('name' => 'dateNumeraire4', 'type' =>'date'),
                   19 => array('name' => 'dateChequeJeune4', 'type' =>'date'),
                   20 => array('name' => 'dateChequeVacance4', 'type' =>'date'), 
                   21 => array('name' => 'dateCheque4', 'type' =>'date'), 
                   22 => array('name' => 'dateCb4', 'type' =>'date'), 
                   23 => array('name' => 'datePrelev4', 'type' =>'date'),    
                        ); 

                    
               $formBuilder = $this->createFormBuilder($formArray);
           
               
              $date=null;
               
               /*PERIODE 1*/
              
              
               if($entity->getdateNumeraire()==NULL){$date=new \DateTime("now");}
               else{$date=new \DateTime();$date=$entity->getdateNumeraire();}
               $formBuilder->add('dateNumeraire1', 'date',array('format' => 'dd-MM-yyyy', 'data' =>$date));
                     
      
               if($entity->getdateChequeJeune()==NULL){$date=new \DateTime("now");}
               else{$date=new \DateTime();$date=$entity->getdateChequeJeune();}
               $formBuilder->add('dateChequeJeune1', 'date',array('format' => 'dd-MM-yyyy', 'data' =>$date));
               
               if($entity->getdateChequeVacance()==NULL){$date=new \DateTime("now");}
               else{$date=new \DateTime();$date=$entity->getdateChequeVacance();}
               $formBuilder->add('dateChequeVacance1', 'date',array('format' => 'dd-MM-yyyy', 'data' =>$date));
               
               if($entity->getdateCheque()==NULL){$date=new \DateTime("now");}
               else{$date=new \DateTime();$date=$entity->getdateCheque();}
               $formBuilder->add('dateCheque1', 'date',array('format' => 'dd-MM-yyyy', 'data' =>$date));
               
               if($entity->getdateCb()==NULL){$date=new \DateTime("now");}
               else{$date=new \DateTime();$date=$entity->getdateCb();}
               $formBuilder->add('dateCb1', 'date',array('format' => 'dd-MM-yyyy', 'data' =>$date));
               
               if($entity->getdatePrelev()==NULL){$date=new \DateTime("now");}
               else{$date=new \DateTime();$date=$entity->getdatePrelev();}
               $formBuilder->add('datePrelev1', 'date',array('format' => 'dd-MM-yyyy', 'data' =>$date));
               
             
               
               
               /*Periode 2 */
               if($entity2->getdateNumeraire()==NULL){$date=new \DateTime("now");}
               else{$date=new \DateTime();$date=$entity2->getdateNumeraire();}
               $formBuilder->add('dateNumeraire2', 'date',array('format' => 'dd-MM-yyyy', 'data' =>$date));
                     
          
               if($entity2->getdateChequeJeune()==NULL){$date=new \DateTime("now");}
               else{$date=new \DateTime();$date=$entity2->getdateChequeJeune();}
               $formBuilder->add('dateChequeJeune2', 'date',array('format' => 'dd-MM-yyyy', 'data' =>$date));
               
               if($entity2->getdateChequeVacance()==NULL){$date=new \DateTime("now");}
               else{$date=new \DateTime();$date=$entity2->getdateChequeVacance();}
               $formBuilder->add('dateChequeVacance2', 'date',array('format' => 'dd-MM-yyyy', 'data' =>$date));
               
               if($entity2->getdateCheque()==NULL){$date=new \DateTime("now");}
               else{$date=new \DateTime();$date=$entity2->getdateCheque();}
               $formBuilder->add('dateCheque2', 'date',array('format' => 'dd-MM-yyyy', 'data' =>$date));
               
               if($entity2->getdateCb()==NULL){$date=new \DateTime("now");}
               else{$date=new \DateTime();$date=$entity2->getdateCb();}
               $formBuilder->add('dateCb2', 'date',array('format' => 'dd-MM-yyyy', 'data' =>$date));
               
               if($entity2->getdatePrelev()==NULL){$date=new \DateTime("now");}
               else{$date=new \DateTime();$date=$entity2->getdatePrelev();}
               $formBuilder->add('datePrelev2', 'date',array('format' => 'dd-MM-yyyy', 'data' =>$date));
               
               
               
               
               
               if($entity3->getdateNumeraire()==NULL){$date=new \DateTime("now");}
               else{$date=new \DateTime();$date=$entity->getdateNumeraire();}
               $formBuilder->add('dateNumeraire3', 'date',array('format' => 'dd-MM-yyyy', 'data' =>$date));
                     
      
               if($entity3->getdateChequeJeune()==NULL){$date=new \DateTime("now");}
               else{$date=new \DateTime();$date=$entity3->getdateChequeJeune();}
               $formBuilder->add('dateChequeJeune3', 'date',array('format' => 'dd-MM-yyyy', 'data' =>$date));
               
               if($entity3->getdateChequeVacance()==NULL){$date=new \DateTime("now");}
               else{$date=new \DateTime();$date=$entity3->getdateChequeVacance();}
               $formBuilder->add('dateChequeVacance3', 'date',array('format' => 'dd-MM-yyyy', 'data' =>$date));
               
               if($entity3->getdateCheque()==NULL){$date=new \DateTime("now");}
               else{$date=new \DateTime();$date=$entity3->getdateCheque();}
               $formBuilder->add('dateCheque3', 'date',array('format' => 'dd-MM-yyyy', 'data' =>$date));
               
               if($entity3->getdateCb()==NULL){$date=new \DateTime("now");}
               else{$date=new \DateTime();$date=$entity3->getdateCb();}
               $formBuilder->add('dateCb3', 'date',array('format' => 'dd-MM-yyyy', 'data' =>$date));
               
               if($entity3->getdatePrelev()==NULL){$date=new \DateTime("now");}
               else{$date=new \DateTime();$date=$entity3->getdatePrelev();}
               $formBuilder->add('datePrelev3', 'date',array('format' => 'dd-MM-yyyy', 'data' =>$date));
               
               
               
               
               if($entity4->getdateNumeraire()==NULL){$date=new \DateTime("now");}
               else{$date=new \DateTime();$date=$entity4->getdateNumeraire();}
               $formBuilder->add('dateNumeraire4', 'date',array('format' => 'dd-MM-yyyy', 'data' =>$date));
                     
      
               if($entity4->getdateChequeJeune()==NULL){$date=new \DateTime("now");}
               else{$date=new \DateTime();$date=$entity4->getdateChequeJeune();}
               $formBuilder->add('dateChequeJeune4', 'date',array('format' => 'dd-MM-yyyy', 'data' =>$date));
               
               if($entity4->getdateChequeVacance()==NULL){$date=new \DateTime("now");}
               else{$date=new \DateTime();$date=$entity4->getdateChequeVacance();}
               $formBuilder->add('dateChequeVacance4', 'date',array('format' => 'dd-MM-yyyy', 'data' =>$date));
               
               if($entity4->getdateCheque()==NULL){$date=new \DateTime("now");}
               else{$date=new \DateTime();$date=$entity4->getdateCheque();}
               $formBuilder->add('dateCheque4', 'date',array('format' => 'dd-MM-yyyy', 'data' =>$date));
               
               if($entity4->getdateCb()==NULL){$date=new \DateTime("now");}
               else{$date=new \DateTime();$date=$entity4->getdateCb();}
               $formBuilder->add('dateCb4', 'date',array('format' => 'dd-MM-yyyy', 'data' =>$date));
               
               if($entity4->getdatePrelev()==NULL){$date=new \DateTime("now");}
               else{$date=new \DateTime();$date=$entity4->getdatePrelev();}
               $formBuilder->add('datePrelev4', 'date',array('format' => 'dd-MM-yyyy', 'data' =>$date));
               
               
               $formBuilder->add('idperiode1', 'hidden',array('data' =>$id));
               
               
               
               $form =$formBuilder->getForm();


        return $this->render('EcoleDeMusiqueWelcomeBundle:PaiementPeriode:edit.html.twig', array(
            'entity'=>$entity,
            'entity2'=>$entity2,
            'entity3'=>$entity3,
            'entity4'=>$entity4,
            'edit_form'=>$form->createView(),
        ));
    }

    /**
     * Edits an existing PaiementPeriode entity.
     *
     */
    public function updateAction(Request $request, $id)
    {

        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EcoleDeMusiqueWelcomeBundle:PaiementPeriode')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PaiementPeriode entity.');
        }

        
        if($_GET["numeraire"]==0)
        {
              $entity->setDateNumeraire(null);
            
        }
        
         
        if($_GET["jeune"]==0)
        {
             $entity->setDateChequeJeune(null);
            
        }
        
         if($_GET["vacance"]==0)
        {
            $entity->setDatechequeVacance(null);
            
        }
        
          if($_GET["cheque"]==0)
        {
            $entity->setDatecheque(null);
            
        }
        
        if($_GET["cb"]==0)
        {
            $entity->setDatecb(null);
            
        }
        if($_GET["prelev"]==0)
        {
            $entity->setDatePrelev(null); 
            
        }
        
        
        
       $entity->setNumeraire($_GET["numeraire"]);
       $entity->setchequeJeune($_GET["jeune"]);
       $entity->setchequeVacance($_GET["vacance"]);
       $entity->setcheque($_GET["cheque"]);
       $entity->setCb($_GET["cb"]);
       $entity->setPrelev($_GET["prelev"]);
   
          $sess = $request->getSession();
          $sess->set( 'champ', $_GET["champ"]);
          $sess->set( 'scroll', $_GET["scroll"]);
          
      //    $sess->set( 'cache',$_GET["cache"]);
          
          $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('paiement'));
    }

    /**
     * Deletes a PaiementPeriode entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('EcoleDeMusiqueWelcomeBundle:PaiementPeriode')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find PaiementPeriode entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('paiementperiode'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
    
    
     public function updateDateAction()
    {
          $request = $this->getRequest();
         $form = $request->request->get("form");
         

            $em = $this->getDoctrine()->getManager();

           $entity = $em->getRepository('EcoleDeMusiqueWelcomeBundle:PaiementPeriode')->find($form["idperiode1"]);

           if (!$entity) {
               throw $this->createNotFoundException('Unable to find PaiementPeriode entity.');
           }

                 
                
        
          
          for($i=1;$i<=4;$i++)
          {
                
                 $entityPaiement = $this->getDoctrine()->getManager()->getRepository('EcoleDeMusiqueWelcomeBundle:PaiementPeriode')->findOneBy(array("paiement"=>$entity->getPaiement(),"numPeriod"=>$i));
                              
                 
                 if($entityPaiement)
                 {
                 
                 
                        if($entityPaiement->getNumeraire()!=NULL && $entityPaiement->getNumeraire()!=0)
                        {
                                $date=new \DateTime();
                                $date->setDate($form["dateNumeraire".$i]["year"],$form["dateNumeraire".$i]["month"],$form["dateNumeraire".$i]["day"]);

                                $entityPaiement->setDateNumeraire($date);
                        }
                        else
                        {
                            $entityPaiement->setDateNumeraire(null);
                            
                        }
                        
                        
                 
                        if($entityPaiement->getChequeJeune()!=NULL && $entityPaiement->getChequeJeune()!=0)
                       {
                               $date=new \DateTime();
                               $date->setDate($form["dateChequeJeune".$i]["year"],$form["dateChequeJeune".$i]["month"],$form["dateChequeJeune".$i]["day"]);

                               $entityPaiement->setDateChequeJeune($date);
                       }  
                       else
                       {
                             $entityPaiement->setDateChequeJeune(null);
                       }

                       
                       if($entityPaiement->getchequeVacance()!=NULL && $entityPaiement->getchequeVacance()!=0)
                       {
                               $date=new \DateTime();
                               $date->setDate($form["dateChequeVacance".$i]["year"],$form["dateChequeVacance".$i]["month"],$form["dateChequeVacance".$i]["day"]);

                               $entityPaiement->setDatechequeVacance($date);
                       }  
                       else
                       {
                           
                           $entityPaiement->setDatechequeVacance(null);
                           
                       }

                       if($entityPaiement->getcheque()!=NULL && $entityPaiement->getcheque()!=0)
                       {
                               $date=new \DateTime();
                               $date->setDate($form["dateCheque".$i]["year"],$form["dateCheque".$i]["month"],$form["dateCheque".$i]["day"]);
                               $entityPaiement->setDatecheque($date);
                       }  
                       else
                       {
                           $entityPaiement->setDatecheque(null);
                       }

                       if($entityPaiement->getcb()!=NULL && $entityPaiement->getcb()!=0)
                       {
                               $date=new \DateTime();
                               $date->setDate($form["dateCb".$i]["year"],$form["dateCb".$i]["month"],$form["dateCb".$i]["day"]);

                               $entityPaiement->setDatecb($date);
                       }  
                       else
                       {
                           $entityPaiement->setDatecb(null);
                           
                       }

                        if($entityPaiement->getPrelev()!=NULL && $entityPaiement->getPrelev()!=0)
                       {
                               $date=new \DateTime();
                               $date->setDate($form["datePrelev".$i]["year"],$form["datePrelev".$i]["month"],$form["datePrelev".$i]["day"]);

                               $entityPaiement->setDatePrelev($date);
                       }
                       else
                       {
                               $entityPaiement->setDatePrelev(null); 
                       }
                       
                        $em->persist($entityPaiement);
                        $em->flush();
                 }
     
          }

          return $this->redirect($this->generateUrl('paiement'));

     }
    
    
}
