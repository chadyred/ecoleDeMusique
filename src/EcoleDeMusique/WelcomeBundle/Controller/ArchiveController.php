<?php

namespace EcoleDeMusique\WelcomeBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use EcoleDeMusique\WelcomeBundle\Entity\Archive;
use EcoleDeMusique\WelcomeBundle\Form\ArchiveType;

/**
 * Archive controller.
 *
 */
class ArchiveController extends Controller
{
    /**
     * Lists all Archive entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('EcoleDeMusiqueWelcomeBundle:Archive')->findBy(array(), array('nom' => 'asc'));

        return $this->render('EcoleDeMusiqueWelcomeBundle:Archive:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Finds and displays a Archive entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EcoleDeMusiqueWelcomeBundle:Archive')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Archive entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EcoleDeMusiqueWelcomeBundle:Archive:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to create a new Archive entity.
     *
     */
    public function newAction()
    {

        $em = $this->getDoctrine()->getManager();
        $i = 0;
        $tab = null;
           $query = $em->createQuery("SELECT p, e 
                 FROM EcoleDeMusiqueWelcomeBundle:Paiement p 
                 JOIN p.eleve e
                 ORDER BY e.nom ASC");

        $entPaiement = $query->getResult();

        //Pour chaque paiement
        foreach ($entPaiement as $paiement) 
        {
            
            $tab[$i]["id"] = $paiement->getId();
            if ($paiement->getInterupt() == null) {
                $tab[$i]["interupt"] = "Non";
            } else {
                $tab[$i]["interupt"] = "oui";
            }

            $tab[$i]["idEleve"] = $paiement->getEleve()->getId();
            $tab[$i]["nom"] = $paiement->getEleve()->getNom();
            $tab[$i]["prenom"] = $paiement->getEleve()->getPrenom();
            $i++;
        }


        return $this->render('EcoleDeMusiqueWelcomeBundle:Archive:new.html.twig', array(
             'entities' => $tab,
        ));
        
        
        
        
        
        
        
    }

    /**
     * Creates a new Archive entity.
     *
     */
    public function createAction(Request $request)
    {

         $session = $this->getRequest()->getSession();
          
       //recup info eleve
        $em = $this->getDoctrine()->getManager();
        $entityEleve = $em->getRepository('EcoleDeMusiqueWelcomeBundle:Eleve')->find($_POST["idEleve"]);         
       //Recup info actvité
         $em = $this->getDoctrine()->getManager();
         $entiteInstru1=$em->getRepository('EcoleDeMusiqueWelcomeBundle:ActiviteEleve')->findOneBy(array('type'=>'instru1','eleve'=>$entityEleve));
         $entiteInstru2=$em->getRepository('EcoleDeMusiqueWelcomeBundle:ActiviteEleve')->findOneBy(array('type'=>'instru2','eleve'=>$entityEleve));        
         
   
                   
       if($entiteInstru1)
       {
           
           //booleen -> si y'a un instru et qu'il est inscrit à l'instru
           $cdt1=$entityEleve->getRegie()->getIntru2()!="non" && $entiteInstru2;
           
           $cdt2=$entityEleve->getRegie()->getIntru2()=="non";
           
          if($cdt1 || $cdt2)
         {    

                //Rangement dans dans archive
                $Archive  = new \EcoleDeMusique\WelcomeBundle\Entity\Archive();

                $Archive->setNom($entityEleve->getNom());
                $Archive->setPrenom($entityEleve->getPrenom());
                $Archive->setdateDeNaissance($entityEleve->getDateDeNaissance());
                $Archive->setCycle($entityEleve->getregie()->getcycleParcours());
                $Archive->setInstru1($entiteInstru1->getActivite()->getNom());
                
                $em->remove($entiteInstru1);
                
                //si y'a un instru j'enregistre le cours 
                if(!$cdt2)
                {
                    $Archive->setInstru2($entiteInstru2->getActivite()->getNom());
                    $em->remove($entiteInstru2);
                    
                }
                else //sinon je met une valeur par defaut
                {
                    $Archive->setInstru2("aucun");
                }
                
                $Archive->setanneeActivite($entityEleve->getRegie()->getanneDeCours());

                $entityPaiement = $em->getRepository('EcoleDeMusiqueWelcomeBundle:Paiement')->findOneByEleve($entityEleve);
                
                $Archive->setInteruptionCourannee($entityPaiement->getdateInterupt());



                $em2 = $this->getDoctrine()->getManager();
                    //Suppresion periode 
                    $entityPaiementPeriode = $em->getRepository('EcoleDeMusiqueWelcomeBundle:PaiementPeriode')->findByPaiement($entityPaiement);  
                    //$entityPaiementPeriode->setPaiement(null);


                    foreach($entityPaiementPeriode as $pp)
                    {
                            $em2->remove($pp);
                    }


                    //suppression du paiement

                    $entityPaiement->setEleve(null);

                    $em2->remove($entityPaiement);
                    $regie=$entityEleve->getregie();
                    $entityEleve->setregie(null);
                    //suppresion de la regie 
                    $em2->remove($regie);    
                    $em2->flush();


              
                 
            /**
             * Inutile : DRY non respecter : le removeOrphan existe ActiviteEleve->Eleve(removeOrphan) supprime les activiteEleve
             *  ActiviteEleve orpheline
             * 
             * Correctif qui fonctionne but not Symfony way !
             * 
             * foreach($entiteTteActiviteEleve as $ActElev)
             *  {
             *      $ActElev->setEleve(null);
             *      $em3->remove($ActElev);  
             *  }
             */
             $em3 = $this->getDoctrine()->getManager();
             $entiteTteActiviteEleve=$em->getRepository('EcoleDeMusiqueWelcomeBundle:ActiviteEleve')->findByEleve($entityEleve);        
         
             foreach($entiteTteActiviteEleve as $ActElev)
             {
                 $em3->remove($ActElev);  
             }
                 $em3->flush();
                   $this->get('session')->getFlashBag()->add('notice', "Archivage bien Effectue");                
         }
         else
         {
              
             $this->get('session')->getFlashBag()->add('notice', "Archivage Impossible, instru 2 non saisi"); 
         }
         
          //Non renouvellement par le service asynchrone = suppression de l'entité élève
           if( $_POST["re"]=="non")
           {     
                $em->remove($entityEleve);      
           }

           $em->persist($Archive);
           $em->flush();

       }
       else
       {
            if(!$entiteInstru1)
            {
                  $this->get('session')->getFlashBag()->add('notice', "L'élève n'a pas été affecté à un cours d'instrument 1, Veuillez le faire avant l'archivage ");                
            }
           
           
       }
       return $this->redirect($this->generateUrl('archive_new'));

    }
    
    
    /**
     * Fonction qui ne pense pas objet, afin de supprimer les paiement, les cours des élèves, les périodes EN LES RENOUVELLANT TOUS 
     * on enlève  
     *  if( $_POST["re"]=="non")
     *     {     
     *          $em->remove($entityEleve);      
     *     }
     * @return type
     */
    public function createallrenouvellementAction()
    {
        $session = $this->getRequest()->getSession();
          
       //recup info eleve
        $em = $this->getDoctrine()->getManager();
        
        
        //si un eleve est pas dans la regie aucun intêrét de l'archiver, car cela signifie qu'il le serait déjà, cad qu'il n'a plus de régie
        // dans ce cas
       $entityRegie = $em->getRepository('EcoleDeMusiqueWelcomeBundle:Regie')->findAll(); 
       $tab=array();
        foreach($entityRegie as $entityRegie)
        {
            $tab[]=$entityRegie->getid();
        
        }
        
        $entityEleves = $em->getRepository('EcoleDeMusiqueWelcomeBundle:Eleve')->findByregie($tab);    
       //Recup info actvité
   
       foreach ($entityEleves as $entityEleve)
       {
            $entiteInstru1=$em->getRepository('EcoleDeMusiqueWelcomeBundle:ActiviteEleve')->findOneBy(array('type'=>'instru1','eleve'=>$entityEleve));
            $entiteInstru2=$em->getRepository('EcoleDeMusiqueWelcomeBundle:ActiviteEleve')->findOneBy(array('type'=>'instru2','eleve'=>$entityEleve));    
            
            
            

                if($entiteInstru1)
                {

                    //booleen -> si y'a un instru et qu'il est inscrit à l'instru
                    $cdt1=$entityEleve->getRegie()->getIntru2()!="non" && $entiteInstru2;

                    $cdt2=$entityEleve->getRegie()->getIntru2()=="non";

                         if($cdt1 || $cdt2)
                        {    

                               //Rangement dans dans archive
                               $Archive  = new \EcoleDeMusique\WelcomeBundle\Entity\Archive();

                               $Archive->setNom($entityEleve->getNom());
                               $Archive->setPrenom($entityEleve->getPrenom());
                               $Archive->setdateDeNaissance($entityEleve->getDateDeNaissance());
                               $Archive->setCycle($entityEleve->getregie()->getcycleParcours());
                               $Archive->setInstru1($entiteInstru1->getActivite()->getNom());

                               $em->remove($entiteInstru1);

                               //si y'a un instru j'enregistre le cours 
                               if(!$cdt2)
                               {
                                   $Archive->setInstru2($entiteInstru2->getActivite()->getNom());
                                   $em->remove($entiteInstru2);

                               }
                               else //sinon je met une valeur par defaut
                               {
                                   $Archive->setInstru2("aucun");
                               }

                               $Archive->setanneeActivite($entityEleve->getRegie()->getanneDeCours());

                               $entityPaiement = $em->getRepository('EcoleDeMusiqueWelcomeBundle:Paiement')->findOneByEleve($entityEleve);

                               $Archive->setInteruptionCourannee($entityPaiement->getdateInterupt());



                               $em2 = $this->getDoctrine()->getManager();
                                   //Suppresion periode 
                                   $entityPaiementPeriode = $em->getRepository('EcoleDeMusiqueWelcomeBundle:PaiementPeriode')->findByPaiement($entityPaiement);  
                                   //$entityPaiementPeriode->setPaiement(null);


                                   foreach($entityPaiementPeriode as $pp)
                                   {
                                           $em2->remove($pp);
                                   }


                                   //suppression du paiement

                                   $entityPaiement->setEleve(null);

                                   $em2->remove($entityPaiement);
                                   $regie=$entityEleve->getregie();
                                   $entityEleve->setregie(null);
                                   //suppresion de la regie 
                                   $em2->remove($regie);    
                                   $em2->flush();





                            $em3 = $this->getDoctrine()->getManager();
                            $entiteTteActiviteEleve=$em->getRepository('EcoleDeMusiqueWelcomeBundle:ActiviteEleve')->findByEleve($entityEleve);        

                            foreach($entiteTteActiviteEleve as $ActElev)
                            {
                                $em3->remove($ActElev);  
                            }
                                $em3->flush();
                                
                              $em->persist($Archive);
                              $em->flush();
                                    
                        }
                        else
                        {
                             $this->get('session')->getFlashBag()->add('notice', "Archivage Impossible pour ".$entityEleve->getPrenom()." ".$entityEleve->getnom().", instru 2 non saisi"); 
                             break;
                        }
                      }
                      else
                      {
                           if(!$entiteInstru1)
                           {
                                 $this->get('session')->getFlashBag()->add('notice', "L'élève".$entityEleve->getPrenom()." ".$entityEleve->getnom()." n'a pas été affecté à un cours d'instrument 1, Veuillez le faire avant l'archivage "); 
                                 break;
                           }
                      }
            
       } 
            
        return $this->redirect($this->generateUrl('archive_new'));
    }
    /**
     * Displays a form to edit an existing Archive entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EcoleDeMusiqueWelcomeBundle:Archive')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Archive entity.');
        }

        $editForm = $this->createForm(new ArchiveType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EcoleDeMusiqueWelcomeBundle:Archive:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Archive entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EcoleDeMusiqueWelcomeBundle:Archive')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Archive entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new ArchiveType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('archive_edit', array('id' => $id)));
        }

        return $this->render('EcoleDeMusiqueWelcomeBundle:Archive:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Archive entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
            $session = $this->getRequest()->getSession();

            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('EcoleDeMusiqueWelcomeBundle:Archive')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Archive entity.');
            }

            $em->remove($entity);
            $em->flush();
     
             $this->get('session')->getFlashBag()->add('notice', "supression réussi");

        return $this->redirect($this->generateUrl('archive'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
