<?php

namespace EcoleDeMusique\WelcomeBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use EcoleDeMusique\WelcomeBundle\Entity\Salle;
use EcoleDeMusique\WelcomeBundle\Form\SalleType;

/**
 * Salle controller.
 *
 */
class SalleController extends Controller
{
    /**
     * Lists all Salle entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('EcoleDeMusiqueWelcomeBundle:Salle')->findAll();

        return $this->render('EcoleDeMusiqueWelcomeBundle:Salle:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Finds and displays a Salle entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EcoleDeMusiqueWelcomeBundle:Salle')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Salle entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EcoleDeMusiqueWelcomeBundle:Salle:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to create a new Salle entity.
     *
     */
    public function newAction()
    {
        $entity = new Salle();
        $form   = $this->createForm(new SalleType(), $entity);

        return $this->render('EcoleDeMusiqueWelcomeBundle:Salle:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a new Salle entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Salle();
        $form = $this->createForm(new SalleType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
                
            $this->get('session')->getFlashBag()->add('notice', "Nouvelle salle enregistré avec succés");
            
            return $this->redirect($this->generateUrl('salle'));
        }

        return $this->render('EcoleDeMusiqueWelcomeBundle:Salle:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Salle entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EcoleDeMusiqueWelcomeBundle:Salle')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Salle entity.');
        }

        $editForm = $this->createForm(new SalleType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EcoleDeMusiqueWelcomeBundle:Salle:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Salle entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EcoleDeMusiqueWelcomeBundle:Salle')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Salle entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new SalleType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('salle_edit', array('id' => $id)));
        }

        return $this->render('EcoleDeMusiqueWelcomeBundle:Salle:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Salle entity.
     *
     */
    public function deleteAction($id)
    {
    
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('EcoleDeMusiqueWelcomeBundle:Salle')->find($id);

            
             if (!$entity) {
                throw $this->createNotFoundException('Unable to find Prof entity.');
            }

            
            $cours= $em->getRepository('EcoleDeMusiqueWelcomeBundle:Cours')->findBySalle($entity);
            
            if($cours)
            {    
                $entitiesCoursEleve= $em->getRepository('EcoleDeMusiqueWelcomeBundle:CoursEleve')->findByCours($cours);



                foreach ($cours as $cours)
                {
                        if(isset($cours))
                        {
                            $em->remove($cours); 

                            foreach ($entitiesCoursEleve as $entitiesCoursEleve)
                            {
                                $em->remove($entitiesCoursEleve);      
                            }
                        }
                }
            }
            
            
            $em->remove($entity);
            $em->flush();


        return $this->redirect($this->generateUrl('salle'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
