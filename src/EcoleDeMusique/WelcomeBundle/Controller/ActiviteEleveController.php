<?php

namespace EcoleDeMusique\WelcomeBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use EcoleDeMusique\WelcomeBundle\Entity\ActiviteEleve;
use EcoleDeMusique\WelcomeBundle\Form\ActiviteEleveType;

/**
 * ActiviteEleve controller.
 *
 */
class ActiviteEleveController extends Controller
{
    /**
     * Lists all ActiviteEleve entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        
        
           
        $query = $em->createQuery("SELECT a, e 
                 FROM EcoleDeMusiqueWelcomeBundle:ActiviteEleve a 
                 JOIN a.eleve e
                 ORDER BY e.nom ASC");

        $entities = $query->getResult();

        return $this->render('EcoleDeMusiqueWelcomeBundle:ActiviteEleve:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Finds and displays a ActiviteEleve entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EcoleDeMusiqueWelcomeBundle:ActiviteEleve')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ActiviteEleve entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EcoleDeMusiqueWelcomeBundle:ActiviteEleve:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to create a new ActiviteEleve entity.
     *
     */
    public function newAction()
    {
        $entity = new ActiviteEleve();
        $form   = $this->createForm(new ActiviteEleveType(), $entity);

        return $this->render('EcoleDeMusiqueWelcomeBundle:ActiviteEleve:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a new ActiviteEleve entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new ActiviteEleve();
        $form = $this->createForm(new ActiviteEleveType(), $entity);
        $form->bind($request);
        $session = $this->getRequest()->getSession();

        /* pour écraser une entité 2 je récupère le détail */
        $formeuh = $request->request->get("ecoledemusique_welcomebundle_activiteelevetype");
   
        
        if ($form->isValid()) {
   
         
          
            
          if(!$entity->getActivite())
          {
                 $this->get('session')->getFlashBag()->add('notice', "Pas d'activite saisie");
          }  
          else
          {
              
                if(!$entity->getEleve())
               {
                      $this->get('session')->getFlashBag()->add('notice', "Pas d'eleve saisie");
               }    
               else 
               {
                   
                                 
                    if(($entity->getType()=="instru1" || $entity->getType()=="instru2" || $entity->getType()=="instru3") &&  $entity->getActivite()->getCategorie()!="instrument")
                    {
                       $this->get('session')->getFlashBag()->add('notice', "Vous ne pouvez pas lié une activité collective à instrument");
                        
                    }
                    else
                    {
                        
                        if($entity->getType()=="pratique collective" && $entity->getActivite()->getCategorie()=="instrument")
                        {
                                
                                $this->get('session')->getFlashBag()->add('notice', "Vous ne pouvez pas lié un instrument à une activité collective");  
                        }
                        else
                        {
                            
             
                            if($entity->getType()=="formation musicale"  &&  $entity->getActivite()->getCategorie()=="instrument")
                            {
                                  $this->get('session')->getFlashBag()->add('notice', "Vous ne pouvez pas lié un instrument à une formation musicale");  
                            
                            }
                            else 
                            {
                                
                                    if(($entity->getType()=="formation musicale"  &&  $entity->getActivite()->getCategorie()=="pratique collective") || ($entity->getType()=="pratique collective"  &&  $entity->getActivite()->getCategorie()=="formation musicale"))
                                    {
                                          $this->get('session')->getFlashBag()->add('notice', "Vous ne pouvez pas lié une formation musicale à une pratique collective");  

                                    }
                                    else 
                                    {
                                            $em = $this->getDoctrine()->getManager();


                                            $entity2 = $em->getRepository('EcoleDeMusiqueWelcomeBundle:ActiviteEleve')->findOneBy(array('type'=>$entity->getType(),'eleve'=>$entity->getEleve()));

                                             if ($entity2) {


                                                  $entityActivite = $em->getRepository('EcoleDeMusiqueWelcomeBundle:Activite')->find($formeuh["activite"]);
                                                  $entity2->settype($formeuh["type"]);
                                                  $entity2->setactivite($entityActivite);       

                                                  
                                                  /*on lie la personne à l'activité de l'agenda */
                                                   if($entity->getType()=="formation musicale"  ||  $entity->getActivite()->getCategorie()=="pratique collective")
                                                   {
                        
                                                            $cours = $em->getRepository('EcoleDeMusiqueWelcomeBundle:Cours')->findOneByActivite($entityActivite);

                                                            if($cours)
                                                            {
                                                                $CoursEleve=new \EcoleDeMusique\WelcomeBundle\Entity\CoursEleve();
                                                                $CoursEleve->setEleve($entity->getEleve());
                                                                $CoursEleve->setCours($cours);

                                                                $em->persist($CoursEleve);
                                                            }
                                                   }

                                                  /*--------------------------------------------*/
                                   
                                                  $em->persist($entity2);
                                                  $em->flush();      

                                             }
                                             else
                                             {
                                                 /*on lie la personne à l'activité de l'agenda */
                                                 if($entity->getType()=="formation musicale"  ||  $entity->getActivite()->getCategorie()=="pratique collective")
                                                   {
                                                            $cours = $em->getRepository('EcoleDeMusiqueWelcomeBundle:Cours')->findOneByActivite($entity->getActivite());

                                                            if($cours)
                                                            {
                                                                $CoursEleve=new \EcoleDeMusique\WelcomeBundle\Entity\CoursEleve();
                                                                $CoursEleve->setEleve($entity->getEleve());
                                                                $CoursEleve->setCours($cours);

                                                                $em->persist($CoursEleve);
                                                            }
                                                   }
                                                  
                                                  /*--------------------------------------------*/
                                                  
                                                    $em->persist($entity);
                                                    $em->flush();      
                                             }

                                             $this->get('session')->getFlashBag()->add('notice', "Saisie effectuée avec succés ");  
                                   }
                            }
                        }
                    }
                        
               }
           }
           
           return $this->render('EcoleDeMusiqueWelcomeBundle:ActiviteEleve:new.html.twig', array(
                        'entity' => $entity,
                        'form'   => $form->createView(),
                    ));
           
           
        }
        
        
        //On marque un message de convialité dans le template
                $session = $this->getRequest()->getSession();
                $this->get('session')->getFlashBag()->add('notice', 'Erreur de saisie dans le formulaire');

        return $this->render('EcoleDeMusiqueWelcomeBundle:ActiviteEleve:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }
    
    public function searchAction(Request $request)
    {
        
        
        //C'est pas propre de mettre ça ici mais je le met quand même car trop de galère 
                    $formArray = array(
                   0 => array('name' => 'nom', 'type' =>'text'),
                   1 => array('name' => 'prenom', 'type' =>'text'),
                   2 => array('name' => 'pratique', 'type' =>'text'), 
                   3 => array('name' => 'type', 'type' =>'text')); 
                            
                   $formBuilder = $this->createFormBuilder($formArray);     
                        
                   $formBuilder->add('nom', 'text',array('required'  => false,));
                   $formBuilder->add('prenom', 'text',array('required'  => false,));
                   $formBuilder->add('pratique', 'text',array('required'  => false,));
                   $formBuilder->add('type', 'text',array('required'  => false,));
                   $formBuilder->add('cycle', 'text',array('required'  => false,));
                  $form =$formBuilder->getForm();
        
        
           return $this->render('EcoleDeMusiqueWelcomeBundle:ActiviteEleve:search.html.twig', array(
            'form'   => $form->createView()));
    }
    
    
     public function searchResultAction(Request $request)
    {
           
         $formeuh = $request->request->get("form");

             $requete="SELECT z 
                 FROM EcoleDeMusiqueWelcomeBundle:ActiviteEleve z 
                 JOIN z.eleve e
                 JOIN z.activite a
                 join e.regie r";
             
             $temoin="premier";
             
             if($formeuh['nom']!="")
             {
                  $requete=$requete." where";
                  $temoin="second";
                  $requete=$requete." e.nom='".$formeuh['nom']."'";
             }
             
             if($formeuh['prenom']!="")
             {
                 if($temoin=="premier"){$requete=$requete." where";$temoin="second";}else{$requete=$requete." and";}
                 $requete=$requete." e.prenom ='".$formeuh['prenom']."'";
             }
             
             
             if($formeuh['prenom']!="")
             {
                 if($temoin=="premier"){$requete=$requete." where";$temoin="second";}else{$requete=$requete." and";}
                 $requete=$requete." e.prenom ='".$formeuh['prenom']."'";
             }
             
             if($formeuh['pratique']!="")
             {
                 if($temoin=="premier"){$requete=$requete." where";$temoin="second";}else{$requete=$requete." and";}
                 $requete=$requete." a.nom ='".$formeuh['pratique']."'";
             }
             
             if($formeuh['type']!="")
             {
                 if($temoin=="premier"){$requete=$requete." where";$temoin="second";}else{$requete=$requete." and";}
                 $requete=$requete." z.type ='".$formeuh['type']."'";
             }
             
              if($formeuh['cycle']!="")
             {
                 if($temoin=="premier"){$requete=$requete." where";$temoin="second";}else{$requete=$requete." and";}
                 $requete=$requete." r.cycleParcours ='".$formeuh['cycle']."'";
             }
             
             $requete=$requete.' ORDER BY e.nom ASC';
            
                $em = $this->getDoctrine()->getEntityManager();
                $query = $em->createQuery($requete);
                $result = $query->getResult();
             
      
             return $this->render('EcoleDeMusiqueWelcomeBundle:ActiviteEleve:searchResult.html.twig',array('entities' => $result));
 
    }
    

    /**
     * Displays a form to edit an existing ActiviteEleve entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EcoleDeMusiqueWelcomeBundle:ActiviteEleve')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ActiviteEleve entity.');
        }

        $editForm = $this->createForm(new ActiviteEleveType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EcoleDeMusiqueWelcomeBundle:ActiviteEleve:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing ActiviteEleve entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EcoleDeMusiqueWelcomeBundle:ActiviteEleve')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ActiviteEleve entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new ActiviteEleveType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('activiteeleve_edit', array('id' => $id)));
        }

        return $this->render('EcoleDeMusiqueWelcomeBundle:ActiviteEleve:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ActiviteEleve entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
   
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('EcoleDeMusiqueWelcomeBundle:ActiviteEleve')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find ActiviteEleve entity.');
            }
              
               $courss=$em->getRepository('EcoleDeMusiqueWelcomeBundle:Cours')->findBy(array("activite"=>$entity->getactivite()));
               foreach ($courss as $c)
               {

                   $coursEleve=$em->getRepository('EcoleDeMusiqueWelcomeBundle:CoursEleve')->findOneBy(array("eleve"=>$entity->getEleve(),"cours"=>$c)); 
                   
                    if($coursEleve)
                    {
                            // On compte le nombre de coursEleve par cours 
                             $cours=$coursEleve->getCours();
                   
                             $coursCompt=$em->getRepository('EcoleDeMusiqueWelcomeBundle:CoursEleve')->findByCours($cours);
            
                             $comptage=count ($coursCompt);
                            //Suppresion de tout les CoursEleve de l'eleve en question 
                            $em->remove($coursEleve);
                  
                            //Si il en restait que un avant la suppresion ON SUPPRIME LE COURS
                            if($comptage==1)
                            {
                                $em->remove($cours);
                            }
                    }
               }

            $em->remove($entity);
            $em->flush();
   
        return $this->redirect($this->generateUrl('activiteeleve'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
