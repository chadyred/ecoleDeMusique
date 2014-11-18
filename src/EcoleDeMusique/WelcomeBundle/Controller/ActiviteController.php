<?php

namespace EcoleDeMusique\WelcomeBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use EcoleDeMusique\WelcomeBundle\Entity\Activite;
use EcoleDeMusique\WelcomeBundle\Form\ActiviteType;

/**
 * Activite controller.
 *
 */
class ActiviteController extends Controller
{
    /**
     * Lists all Activite entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('EcoleDeMusiqueWelcomeBundle:Activite')->findBy(array(), array('nom' => 'asc'));

        return $this->render('EcoleDeMusiqueWelcomeBundle:Activite:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Finds and displays a Activite entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EcoleDeMusiqueWelcomeBundle:Activite')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Activite entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EcoleDeMusiqueWelcomeBundle:Activite:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to create a new Activite entity.
     *
     */
    public function newAction()
    {
        $entity = new Activite();
        $form   = $this->createForm(new ActiviteType(), $entity);

        return $this->render('EcoleDeMusiqueWelcomeBundle:Activite:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a new Activite entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Activite();
        $form = $this->createForm(new ActiviteType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

             $this->get('session')->getFlashBag()->add('notice', "Nouvel activité créer avec succés");
            return $this->redirect($this->generateUrl('activite_new', array('id' => $entity->getId())));
        }

        return $this->render('EcoleDeMusiqueWelcomeBundle:Activite:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Activite entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EcoleDeMusiqueWelcomeBundle:Activite')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Activite entity.');
        }

        $editForm = $this->createForm(new ActiviteType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EcoleDeMusiqueWelcomeBundle:Activite:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Activite entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EcoleDeMusiqueWelcomeBundle:Activite')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Activite entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new ActiviteType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('activite_edit', array('id' => $id)));
        }

        return $this->render('EcoleDeMusiqueWelcomeBundle:Activite:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Activite entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {

            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('EcoleDeMusiqueWelcomeBundle:Activite')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Activite entity.');
            }
             

             $entityActivite = $em->getRepository('EcoleDeMusiqueWelcomeBundle:ActiviteEleve')->findBy(array("activite"=>$entity));
            
             foreach ($entityActivite as $entityActivite) {
                     
                        
           
                    /*  Supression des cours associé à la dite activité */
                       $courss=$em->getRepository('EcoleDeMusiqueWelcomeBundle:Cours')->findBy(array("activite"=>$entity));

                       foreach ($courss as $c)
                       {

                           $coursEleve=$em->getRepository('EcoleDeMusiqueWelcomeBundle:CoursEleve')->findOneBy(array("eleve"=>$entityActivite->getEleve(),"cours"=>$c)); 

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
                       
                  $em->remove($entityActivite);
               }
      
            $em->remove($entity);
            $em->flush();
    
        return $this->redirect($this->generateUrl('activite'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
    
    
    
    
      public function sommaireAction()
      {
              return $this->render('EcoleDeMusiqueWelcomeBundle:Activite:sommaire.html.twig');
     }
     
     
     public function activiteEleveAction()
     {
          return $this->render('EcoleDeMusiqueWelcomeBundle:Activite:activiteEleve.html.twig');
         
     }
     
     
     public function newActiviteEleveAction()
     {
         return $this->render('EcoleDeMusiqueWelcomeBundle:Activite:newActiviteEleve.html.twig');
         
         
     }
    
}
