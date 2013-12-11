<?php

namespace EcoleDeMusique\WelcomeBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use EcoleDeMusique\WelcomeBundle\Entity\Prof;
use EcoleDeMusique\WelcomeBundle\Form\ProfType;

/**
 * Prof controller.
 *
 */
class ProfController extends Controller
{
    /**
     * Lists all Prof entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('EcoleDeMusiqueWelcomeBundle:Prof')->findAll();

        return $this->render('EcoleDeMusiqueWelcomeBundle:Prof:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Finds and displays a Prof entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EcoleDeMusiqueWelcomeBundle:Prof')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Prof entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EcoleDeMusiqueWelcomeBundle:Prof:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to create a new Prof entity.
     *
     */
    public function newAction()
    {
        $entity = new Prof();
        $form   = $this->createForm(new ProfType(), $entity);

        return $this->render('EcoleDeMusiqueWelcomeBundle:Prof:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a new Prof entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Prof();
        $form = $this->createForm(new ProfType(), $entity);
        $form->bind($request);

            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            
             $this->get('session')->getFlashBag()->add('notice', "Nouvelle prof enregistré avec succés");
            
            return $this->redirect($this->generateUrl('prof'));

    }

    /**
     * Displays a form to edit an existing Prof entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EcoleDeMusiqueWelcomeBundle:Prof')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Prof entity.');
        }

        $editForm = $this->createForm(new ProfType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EcoleDeMusiqueWelcomeBundle:Prof:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Prof entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EcoleDeMusiqueWelcomeBundle:Prof')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Prof entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new ProfType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('prof_edit', array('id' => $id)));
        }

        return $this->render('EcoleDeMusiqueWelcomeBundle:Prof:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Prof entity.
     *
     */
    public function deleteAction($id)
    {
    
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('EcoleDeMusiqueWelcomeBundle:Prof')->find($id);
            
            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Prof entity.');
            }

            $cours= $em->getRepository('EcoleDeMusiqueWelcomeBundle:Cours')->findByProf($entity);

            
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
       

        return $this->redirect($this->generateUrl('prof'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
