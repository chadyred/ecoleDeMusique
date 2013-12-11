<?php

namespace EcoleDeMusique\WelcomeBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use EcoleDeMusique\WelcomeBundle\Entity\CoursEleve;
use EcoleDeMusique\WelcomeBundle\Form\CoursEleveType;

/**
 * CoursEleve controller.
 *
 */
class CoursEleveController extends Controller
{
    /**
     * Lists all CoursEleve entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('EcoleDeMusiqueWelcomeBundle:CoursEleve')->findAll();

        return $this->render('EcoleDeMusiqueWelcomeBundle:CoursEleve:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Finds and displays a CoursEleve entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EcoleDeMusiqueWelcomeBundle:CoursEleve')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find CoursEleve entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EcoleDeMusiqueWelcomeBundle:CoursEleve:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to create a new CoursEleve entity.
     *
     */
    public function newAction()
    {
        $entity = new CoursEleve();
        $form   = $this->createForm(new CoursEleveType(), $entity);

        return $this->render('EcoleDeMusiqueWelcomeBundle:CoursEleve:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a new CoursEleve entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new CoursEleve();
        $form = $this->createForm(new CoursEleveType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('courseleve_show', array('id' => $entity->getId())));
        }

        return $this->render('EcoleDeMusiqueWelcomeBundle:CoursEleve:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing CoursEleve entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EcoleDeMusiqueWelcomeBundle:CoursEleve')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find CoursEleve entity.');
        }

        $editForm = $this->createForm(new CoursEleveType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EcoleDeMusiqueWelcomeBundle:CoursEleve:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing CoursEleve entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EcoleDeMusiqueWelcomeBundle:CoursEleve')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find CoursEleve entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new CoursEleveType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('courseleve_edit', array('id' => $id)));
        }

        return $this->render('EcoleDeMusiqueWelcomeBundle:CoursEleve:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a CoursEleve entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('EcoleDeMusiqueWelcomeBundle:CoursEleve')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find CoursEleve entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('courseleve'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
