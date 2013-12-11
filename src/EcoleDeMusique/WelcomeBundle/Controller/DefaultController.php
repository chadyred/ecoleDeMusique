<?php

namespace EcoleDeMusique\WelcomeBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use EcoleDeMusique\WelcomeBundle\Entity\Regie;
use EcoleDeMusique\WelcomeBundle\Entity\Paiement;
use EcoleDeMusique\WelcomeBundle\Entity\PaiementPeriode;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EcoleDeMusiqueWelcomeBundle:Default:index.html.twig');
    }
    
     
       
     public function formulesAction()
    {       
         $form = $this->createFormBuilder() ;
         $f=new \EcoleDeMusique\WelcomeBundle\Form\FormulaireFormule();  
         $formulaire=$f->buildForm($this->getDoctrine()->getRepository("EcoleDeMusiqueWelcomeBundle:Formule")->findAll(),$form);
        return $this->render('EcoleDeMusiqueWelcomeBundle:Default:formules.html.twig', array('form' => $formulaire->createView()));
    }
    
    

    
    public function formulesChangementAction()
    {       
            /*
         $request = $this->getRequest();
         $form = $request->request->get("form");
        */
        
        echo $_POST['mode'];
      die;
         
                $em = $this->getDoctrine()->getEntityManager();
                $formule = $em->getRepository('EcoleDeMusiqueWelcomeBundle:Formule')->find(1);

                //Si on trouve pas la formule
                if (!$formule) {
                        throw $this->createNotFoundException("Pas de Formule à l'id 1");
               }
                   $formule->setParam1($form["Formule0param1"]);
                   $formule->setParam2($form["Formule0param2"]);
                   $formule->setParam3($form["Formule0param3"]);
                   $formule->setParam4($form["Formule0param4"]);
                   $formule->setParam5($form["Formule0param5"]);
                   $formule->setcoefCapv($form["capv"]);
                   $formule->setcoefInstru2($form["coefInstru2"]);
                   $formule->setcoefInstru3($form["coefInstru3"]);
                   $formule->setcoef2eleves($form["coef2eleves"]);
                   $formule->setcoef3eleves($form["coef3eleves"]);
                   $formule->setcoef4eleves($form["coef4eleves"]);
                   $formule->setcoef5eleves($form["coef5eleves"]);
                   $formule->setCoefcyle0($form["cycle0"]);
                   $formule->setCoefcyle1($form["cycle1"]);
                   $formule->setCoefcyle2($form["cycle2"]);
                   $formule->setCoefcyle3($form["cycle3"]);
                   $formule->setFormule($form["FormuleCalcul"]);
                   $formule->setmultiplicateurAdulte($form["MultiplicateurAdulte"]);
                   $formule->settarifMax($form["tarifMax"]);
                   $em->flush();
        
            
         //rappel du formulaire et rafraichissement des données
         $form = $this->createFormBuilder() ;
         $f=new \EcoleDeMusique\WelcomeBundle\Form\FormulaireFormule();  
         $formulaire=$f->buildForm($this->getDoctrine()->getRepository("EcoleDeMusiqueWelcomeBundle:Formule")->findAll(),$form);
        return $this->render('EcoleDeMusiqueWelcomeBundle:Default:formules.html.twig', array('form' => $formulaire->createView()));
    }

    
     public function appliquerTarificationAction()
     {
         

            $request = $this->getRequest();
            $form = $request->request->get("form");
         
         
            
         /*On regarde si une tarification existait déjà si c'est le cas, on supprime l'ancienne et on met la nouvelle*/
         /*Pour cela on cheche l'id de la régie actuelle si elle existe*/
            $regieAsupr=$this->getDoctrine()->getRepository("EcoleDeMusiqueWelcomeBundle:Eleve")->findOneByid($form["nom"]);
            
            
            
            
                /* une fois la nouvelle régie inséré si il y en avait une avant on la remplace */
                if($regieAsupr->getregie()!=NULL)
                {
                   $idRegieAsuppr=$regieAsupr->getregie()->getId();
                }else
                {
                    $idRegieAsuppr=0;
                }
                
         /************************************************************************************************************/

            $calcul= new \EcoleDeMusique\WelcomeBundle\Entity\SommeTarification();
            
           $Eleve=$this->getDoctrine()->getRepository("EcoleDeMusiqueWelcomeBundle:Eleve")->find($form["nom"]);
           $qf=$Eleve->getfamille()->getQf();   
           
           


            
           $sommebase= $calcul->calculFormuleBase($this->getDoctrine(),$qf,$form["capv"]);

           
           $sommeMajCycle=$calcul->calculMajorationCycle($form["cycle"],$sommebase,$this->getDoctrine());
           $sommeAdulte=$calcul->calculMultiplicateurAdulte($form["ea"], $sommeMajCycle,$this->getDoctrine());
           $sommeMajInstru2=$calcul->calculMajorationInstru2($form["instru2"],$sommeAdulte,$this->getDoctrine(),$qf,$form["ea"],$form["capv"]);
           $sommeMajInstru3=$calcul->calculMajorationInstru3($form["instru3"],$sommeMajInstru2,$this->getDoctrine(),$qf,$form["ea"],$form["capv"]);   
           
           
           
             
           $sommeMajorationCapv=$calcul->calculMajorationCapv($form["capv"],$sommeMajInstru3,$this->getDoctrine());
           
           $sommeTarifFinal=$calcul->calculReductionFamille($form["nom"],$sommeMajorationCapv,$this->getDoctrine());
       
       
           //On enre la tarification
 
            $tarif = new Regie();
            
            
            if($form["capv"]=="oui"){$tarif->setCapv(true);}else{$tarif->setCapv(FALSE);}
            if($form["ea"]=="enfant"){$tarif->setEnfantAdulte(true);}else{$tarif->setEnfantAdulte(FALSE);}
            
              if($form["cycle"]=="eveil musical")
                                {
                                   $tarif->setCycleParcours(0);
                                }
                                else
                                {
                                        if($form["cycle"]=="cycle 1")
                                        {
                                             $tarif->setcycleParcours(1);
                                        }
                                        else
                                        {
                                                if($form["cycle"]=="cycle 2")
                                                 { 
                                                     $tarif->setcycleParcours(2);
                                                 }
                                                 else
                                                 {
                                                         if($form["cycle"]=="cycle 3")
                                                         {
                                                              $tarif->setcycleParcours(3);
                                                         }
                                                 }
                                        }
                                }
            
                   $tarif->setIntru2($form["instru2"]);
                   $tarif->setIntru3($form["instru3"]);
                   
                   
                   //Majoration tarifaire
             /*     if($sommeMajInstru3>276.65)
                  {
                      $sommeMajInstru3=276.65;
                      $sommeTarifFinal=276.65;
                  }*/
                   
                   $tarif->setsommeSansRemise($sommeMajorationCapv,2);
                   $tarif->setremise($sommeMajorationCapv-$sommeTarifFinal,2);
                   $tarif->setsommeAvecRemise($sommeTarifFinal,2);
                   $tarif->setAnneDeCours($form["anneDeCours"]);
                   
                       $em=  $this->getDoctrine()->getEntityManager();
                       $em->persist($tarif);
                       $em->flush();
                      
                       
                $em2 = $this->getDoctrine()->getEntityManager();
                $eleve = $em2->getRepository('EcoleDeMusiqueWelcomeBundle:Eleve')->find($form["nom"]);
                $eleve->setRegie($tarif);
                $em2->persist($eleve);
                $em2->flush();

                
                
                /*On supprime l'ancienne régie si il y en avait une */
                if($idRegieAsuppr!=0)
                {
                           /* Suppresion de la tarification en elle même*/
                        $em = $this->getDoctrine()->getManager();
                        $entity = $em->getRepository('EcoleDeMusiqueWelcomeBundle:Regie')->find($idRegieAsuppr);

                        if (!$entity) {
                            throw $this->createNotFoundException('Unable to find Regie entity.');
                        }         
                        $em->remove($entity);
                        $em->flush();
                    
                }
                /*----------------------------------------------------------------------------------*/ 
                /*----------------------------------------------------------------------------------*/ 
                /*----------------------------------------------------------------------------------*/ 
                /*----------------Creation des paiement et paiement par période---------------------*/ 
                
                $em = $this->getDoctrine()->getManager();
                $entityPaiementAsuppr = $em->getRepository('EcoleDeMusiqueWelcomeBundle:Paiement')->findOneByEleve($eleve);
                
                if($entityPaiementAsuppr)
                {
                   $entitiesPaiementPeriodeAsuppr= $em->getRepository('EcoleDeMusiqueWelcomeBundle:PaiementPeriode')->findByPaiement($entityPaiementAsuppr);
                   
                   foreach($entitiesPaiementPeriodeAsuppr as $pperiode)
                   {
                     $em->remove($pperiode);
                   }
                    
                    $em->remove($entityPaiementAsuppr);
  
                    $em->flush();
                }
                    
                
                
                
                
                
                $paiement=new Paiement();
                $paiement->setEleve($eleve);
                $paiement->setInterupt(false);
                $paiement->setDateInterupt(null);
                $paiement->setSommePeriode($sommeTarifFinal/4);
                $paiement->setSommeTotal($tarif->getsommeAvecRemise());
                 $m=  $this->getDoctrine()->getEntityManager();
                 $m->persist($paiement);
                 $m->flush();
                
                for($i=1;$i<=4;$i++)
                {
                    $PaiementPeriode=new PaiementPeriode();
                    $PaiementPeriode->setPaiement($paiement);
                    $PaiementPeriode->setnumPeriod($i);
                    $m->persist($PaiementPeriode);
                    $m->flush();
                    
                    
                }
                
               
                
                
                
                
                
                /*----------------------------------------------------------------------------------*/               
                /*----------------------------------------------------------------------------------*/ 
               /*----------------------------------------------------------------------------------*/ 
                
                //On marque un message de convialité dans le template
                $session = $this->getRequest()->getSession();
                $this->get('session')->getFlashBag()->add('notice', 'Tarification Réussie Pour '.$eleve->getNom()." ".$eleve->getPrenom());
                         

                return $this->redirect($this->generateUrl('regie_new'));
                
     }
    
}