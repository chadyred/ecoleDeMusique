<?php

namespace EcoleDeMusique\WelcomeBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use EcoleDeMusique\WelcomeBundle\Entity\Regie;
use EcoleDeMusique\WelcomeBundle\Form\RegieType;
use EcoleDeMusique\WelcomeBundle\Form\SimulationType;

/**
 * Regie controller.
 *
 */
class RegieController extends Controller
{
    /**
     * Lists all Regie entities.
     *
     */
    public function indexAction()
    {
       // $em = $this->getDoctrine()->getManager();

      // $entities = $em->getRepository('EcoleDeMusiqueWelcomeBundle:Eleve')->findAll();

        
            $em = $this->getDoctrine()->getEntityManager();
            $query = $em->createQuery('SELECT e FROM EcoleDeMusiqueWelcomeBundle:Eleve e where e.regie IS NOT NULL ORDER BY e.nom ASC');

        $entities = $query->getResult();

        
        return $this->render('EcoleDeMusiqueWelcomeBundle:Regie:index.html.twig', array(
            'entities' => $entities,
        ));        
    }

    /**
     * Finds and displays a Regie entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EcoleDeMusiqueWelcomeBundle:Regie')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Regie entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EcoleDeMusiqueWelcomeBundle:Regie:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to create a new Regie entity.
     *
     */
    public function newAction()
    {
        
          /*$em = $this->getDoctrine()->getEntityManager();
          $eleves = $em->getRepository('EcoleDeMusiqueWelcomeBundle:Eleve')->findAll();
          */
          
          $form = $this->createFormBuilder();
         $f=new \EcoleDeMusique\WelcomeBundle\Form\FormulaireRegie();  
         
    
         $formulaire=$f->buildForm($form);
         return $this->render('EcoleDeMusiqueWelcomeBundle:Regie:new.html.twig',array('form' => $formulaire->createView(),"eleves"=>$this->getDoctrine()->getRepository("EcoleDeMusiqueWelcomeBundle:Eleve")->findBy(array(),array('nom' => 'asc'))));
        
    }

    /**
     * Creates a new Regie entity.
     *
     */
    public function createAction(Request $request)
    {
   
        $entity  = new Regie();
        $form = $this->createForm(new RegieType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('regie_show', array('id' => $entity->getId())));
        }

        return $this->render('EcoleDeMusiqueWelcomeBundle:Regie:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Regie entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EcoleDeMusiqueWelcomeBundle:Regie')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Regie entity.');
        }

        $editForm = $this->createForm(new RegieType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EcoleDeMusiqueWelcomeBundle:Regie:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Regie entity.     
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EcoleDeMusiqueWelcomeBundle:Regie')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Regie entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new RegieType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('regie_edit', array('id' => $id)));
        }

        return $this->render('EcoleDeMusiqueWelcomeBundle:Regie:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Regie entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        
       /*-----------On met la valeur null pour l'élève concerné par la régie-------------*/
        //Récupéaration de l'objet de l'élève en question 
        $em = $this->getDoctrine()->getEntityManager();
        $Eleve=$em->getRepository('EcoleDeMusiqueWelcomeBundle:Eleve')->findOneByRegie($id);

        
        if($Eleve)
        {
            $Eleve->setRegie(null);
            $em->flush();
        }
                  
        /*---------------------------------------------------------------------------------*/  

        /* Suppresion de la tarification en elle même*/
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('EcoleDeMusiqueWelcomeBundle:Regie')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Regie entity.');
        }         
        $em->remove($entity);
        $em->flush();
        
        /*-------------------------------------------------------------------------------------------*/
        /* Suppresion de l'ensemble des paiement de l'élève lié réalisé au travers sa tarification*/
        $em = $this->getDoctrine()->getManager();
        $entityPaiement = $em->getRepository('EcoleDeMusiqueWelcomeBundle:Paiement')->findOneByEleve($Eleve);

        if (!$entityPaiement) {
            throw $this->createNotFoundException('Unable to find Regie entity.');
        }      
        
        $entitiesPaiementPeriode=$em->getRepository('EcoleDeMusiqueWelcomeBundle:PaiementPeriode')->findByPaiement($entityPaiement);
        foreach($entitiesPaiementPeriode as $ent) {$em->remove($ent);}

        $em->remove($entityPaiement);


        $em->flush();

        return $this->redirect($this->generateUrl('regie'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
    
    
     public function simulationAction()
     {        
         $form = $this->createFormBuilder();
         $f = new \EcoleDeMusique\WelcomeBundle\Form\SimulationType();  
         
    
         $formulaire=$f->buildForm($form);

         
         return $this->render('EcoleDeMusiqueWelcomeBundle:Regie:simulation.html.twig',array('form' => $formulaire->createView()));
     }
       
      public function simulationApplicationAction()
      {
     
            $request = $this->getRequest();
            $form = $request->request->get("form");
         
          
          
          
           $calcul= new \EcoleDeMusique\WelcomeBundle\Entity\SommeTarification();
          
           $sommebase= $calcul->calculFormuleBase($this->getDoctrine(),$form["qf"],$form["capv"]);

           
           $sommeMajCycle=$calcul->calculMajorationCycle($form["cycle"],$sommebase,$this->getDoctrine());
         
           $sommeAdulte=$calcul->calculMultiplicateurAdulte($form["ea"], $sommeMajCycle,$this->getDoctrine());
           $sommeMajInstru2=$calcul->calculMajorationInstru2($form["instru2"],$sommeAdulte,$this->getDoctrine(),$form["qf"],$form["ea"],$form["capv"]);
           $sommeMajInstru3=$calcul->calculMajorationInstru3($form["instru3"],$sommeMajInstru2,$this->getDoctrine(),$form["qf"],$form["ea"],$form["capv"]); 
           
          $sommeCapv=$calcul->calculMajorationCapv($form["capv"],$sommeMajInstru3,$this->getDoctrine());
         
           
           $formule=$this->getDoctrine()->getRepository("EcoleDeMusiqueWelcomeBundle:Formule")->find(1);
           
                   if($form["nbeleve"]==2)
                    {
                        $sommeRed=$sommeCapv*(1-$formule->getCoef2eleves());
                    }
                    else
                    {
                        if($form["nbeleve"]==3)
                        {
                                $sommeRed=$sommeCapv*(1-$formule->getCoef3eleves());
                        }
                        else
                        {
                            if($form["nbeleve"]==4)
                            {

                                     $sommeRed=$sommeCapv*(1-$formule->getCoef4eleves());

                            }
                            else
                            {
                                if($form["nbeleve"]>=5)
                                {
                                        $sommeRed=$sommeCapv*(1-$formule->getCoef5eleves());
                                }
                                else
                                {
                                    $sommeRed=$sommeCapv;
                                    
                                }
                            } 
                        }   


                   }   
              
        
          
          return $this->render('EcoleDeMusiqueWelcomeBundle:Regie:simulationResultat.html.twig',array(
            'sommeRed'      => round($sommeRed,2),
            'sommeSansRed'  => round($sommeCapv,2),
            'cycle'         => $form["cycle"],
            'capv'          => $form["capv"],
            'ea'            => $form["ea"],
            'instru2'       => $form["instru2"],
            'instru3'       => $form["instru3"],
            'qf'            => $form["qf"],
            'nbeleve'       => $form["nbeleve"]
              
              
              ));
          
          
    }
          
          
          
          
         
         
     
    
    
    
    
    
    
}
