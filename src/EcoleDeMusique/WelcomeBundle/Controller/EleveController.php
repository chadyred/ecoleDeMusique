<?php

namespace EcoleDeMusique\WelcomeBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use EcoleDeMusique\WelcomeBundle\Entity\Eleve;
use EcoleDeMusique\WelcomeBundle\Form\EleveType;
use EcoleDeMusique\WelcomeBundle\Form\EleveEditType;
/**
 * Eleve controller.
 *
 */
class EleveController extends Controller
{
    /**
     * Lists all Eleve entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('EcoleDeMusiqueWelcomeBundle:Eleve')->findBy(array(),array('nom' => 'asc'));

        return $this->render('EcoleDeMusiqueWelcomeBundle:Eleve:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Finds and displays a Eleve entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EcoleDeMusiqueWelcomeBundle:Eleve')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Eleve entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EcoleDeMusiqueWelcomeBundle:Eleve:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to create a new Eleve entity.
     *
     */
    public function newAction()
    {
        
        $entity = new Eleve();
        
        //On créer un objet eleveType et on lui donne un objet doctrine pour qu'il puissse allez mettre les famille 
        $Eleve=new EleveType();
        $Eleve->setDoctrineObject($this->getDoctrine()->getManager());

        $form   = $this->createForm($Eleve, $entity);

        return $this->render('EcoleDeMusiqueWelcomeBundle:Eleve:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a new Eleve entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Eleve();
        
           //On créer un objet eleveType et on lui donne un objet doctrine pour qu'il puissse allez mettre les famille 
        $Eleve=new EleveType();
        $Eleve->setDoctrineObject($this->getDoctrine()->getManager());
        $form   = $this->createForm($Eleve, $entity);
        
        
         $formeuh = $request->request->get("ecoledemusique_welcomebundle_elevetype");
       // $formeuh[ecoledemusique_welcomebundle_elevetype]
        
         $entity->setNom($formeuh["nom"]);
         $entity->setPrenom($formeuh["prenom"]);
         $entity->setAdresse($formeuh["adresse"]);
         $entity->setCodePostal($formeuh["codePostal"]);
         $entity->setCivilite($formeuh["civilite"]);
         $entity->settelPere($formeuh["telPere"]);
         $entity->settelEleve($formeuh["telEleve"]);
         $entity->setTelMere($formeuh["telMere"]);
         $entity->setMail($formeuh["mail"]);
         $entity->setVille($formeuh["ville"]);
         
         $date=new \DateTime();
         $date->setDate($formeuh["dateDeNaissance"]["year"], $formeuh["dateDeNaissance"]["month"], $formeuh["dateDeNaissance"]["day"]);
         $entity->setDateDeNaissance($date);
         
    $entity->setFamille($this->getDoctrine()->getManager()->getRepository('EcoleDeMusiqueWelcomeBundle:Famille')->findOneById($formeuh["famille"]));

     

    /*   $form->bind($request);
       if ($form->isValid()) {*/
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            $this->get('session')->getFlashBag()->add('notice', "Nouvel élève créer avec succés");
            return $this->redirect($this->generateUrl('eleve'));
  /*      }
*/
       /* return $this->render('EcoleDeMusiqueWelcomeBundle:Eleve:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));*/
    }

    /**
     * Displays a form to edit an existing Eleve entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EcoleDeMusiqueWelcomeBundle:Eleve')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Eleve entity.');
        }
        
        
        
        $Eleve=new EleveEditType($entity);
        $Eleve->setDoctrineObject($this->getDoctrine()->getManager());


        $editForm = $this->createForm($Eleve, $entity);

        
        
       
        return $this->render('EcoleDeMusiqueWelcomeBundle:Eleve:edit.html.twig', array(
            'entity'      => $entity,
            'form'   => $editForm->createView(),
        ));
    }

    /**
     * Edits an existing Eleve entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EcoleDeMusiqueWelcomeBundle:Eleve')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Eleve entity.');
        }
        
        
        
         $Eleve=new EleveEditType($entity);
        $Eleve->setDoctrineObject($this->getDoctrine()->getManager());


        $editForm = $this->createForm($Eleve, $entity);
        
        
        
        $editForm->bind($request);

            $em->persist($entity);
            $em->flush();

            
               $this->get('session')->getFlashBag()->add('notice', "Modification effectuée ");
            
            
            return $this->redirect($this->generateUrl('eleve_edit', array('id' => $id)));
       

    }

    /**
     * Deletes a Eleve entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        
        
        
     //   echo $id;
       // die;

            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('EcoleDeMusiqueWelcomeBundle:Eleve')->find($id);
            
            $entityPaiement= $em->getRepository('EcoleDeMusiqueWelcomeBundle:Paiement')->findOneByEleve($entity);
            $entityPaiementPeriode=$em->getRepository('EcoleDeMusiqueWelcomeBundle:PaiementPeriode')->findByPaiement($entityPaiement);
            
            $entityActiviteEleve= $em->getRepository('EcoleDeMusiqueWelcomeBundle:ActiviteEleve')->findByEleve($entity);
            
            $entityCoursEleve= $em->getRepository('EcoleDeMusiqueWelcomeBundle:CoursEleve')->findByEleve($entity);
            
             

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Eleve entity.');
            }
            
            
            
            /*Suppresion cours */
            
          
            foreach ($entityCoursEleve as $ece)          
            {
                 $em->remove($ece);
            
                 if(sizeof($em->getRepository('EcoleDeMusiqueWelcomeBundle:CoursEleve')->findByCours($ece->getcours()))==1)
                 {
                     $em->remove($ece->getcours());
                 }
                 

                 
            }

         
            
            
             /*----------------------------*/
            
            foreach ($entityPaiementPeriode as $epp)          
            {
                $em->remove($epp);                
            }
           
            
            foreach ($entityActiviteEleve as $eae)
            {
                  $em->remove($eae);
            }
            
            
            if($entityPaiement)$em->remove($entityPaiement);
            if($entity->getregie())$em->remove($entity->getregie());
            if($entity)$em->remove($entity);
     
            $em->flush();
 

        return $this->redirect($this->generateUrl('eleve'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
