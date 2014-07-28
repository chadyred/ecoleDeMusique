<?php

namespace EcoleDeMusique\WelcomeBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use EcoleDeMusique\WelcomeBundle\Entity\Famille;
use EcoleDeMusique\WelcomeBundle\Form\FamilleType;

/**
 * Famille controller.
 *
 */
class FamilleController extends Controller
{
    /**
     * Lists all Famille entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('EcoleDeMusiqueWelcomeBundle:Famille')->findAll();
        $tab=null;
         $tabFamilleCompose[""]="";
        
        $i=0;
        foreach($entities as $ent)
        {
            
 
                
          //* Nom des gens de la famille */      
                $Eleve=$em->getRepository('EcoleDeMusiqueWelcomeBundle:Eleve')->findByFamille($ent);
                
                $NomGens="";
                $NomPrec[0]="";
 
                     foreach($Eleve as $e)
                     { 
                           $bool=0;
                            for($i=0;$i<count($NomPrec);$i++)
                            {
                                if($e->getNom()==$NomPrec[$i] && $bool==0)
                                {
                                    $bool=1;
                                }
                            }
                            if($bool==0)
                            {
                               $NomGens=$NomGens." ".$e->getNom();
                            }
                     
                         $NomPrec[count($NomPrec)]=$e->getNom();
                     }
        
                     
                if($NomGens==""){$NomGens="Famille Vide";}
                $tabFamilleCompose[$ent->getid().""]=$NomGens;
         /*----------------------------------------------------------------------*/
              
                if($ent->getQf()==null){ $qf="nul";}
                else{$qf=$ent->getQf();}
                
                $tab[$i]=array("id"=>$ent->getId(),"qf"=>$qf,"noms"=>$NomGens,"nom"=>$ent->getNom(),"prenom"=>$ent->getPrenom());
                
           /*     echo $tab[$i]["id"];
                echo $tab[$i]["qf"];
                echo $tab[$i]["noms"]."<br />";
               */
                
                $i=$i+1;
        }
        
        
             

        return $this->render('EcoleDeMusiqueWelcomeBundle:Famille:index.html.twig', array(
            'tab' => $tab,
        ));
    }

    /**
     * Finds and displays a Famille entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EcoleDeMusiqueWelcomeBundle:Famille')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Famille entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EcoleDeMusiqueWelcomeBundle:Famille:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to create a new Famille entity.
     *
     */
    public function newAction()
    {
        $entity = new Famille();
        $form   = $this->createForm(new FamilleType(), $entity);

        return $this->render('EcoleDeMusiqueWelcomeBundle:Famille:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a new Famille entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Famille();
        $form = $this->createForm(new FamilleType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            
            $this->get('session')->getFlashBag()->add('notice', "Famille créer avec succés");
            return $this->redirect($this->generateUrl('famille_new'));
        }

        return $this->render('EcoleDeMusiqueWelcomeBundle:Famille:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Famille entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EcoleDeMusiqueWelcomeBundle:Famille')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Famille entity.');
        }

        $editForm = $this->createForm(new FamilleType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EcoleDeMusiqueWelcomeBundle:Famille:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Famille entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EcoleDeMusiqueWelcomeBundle:Famille')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Famille entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new FamilleType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('famille_edit', array('id' => $id)));
        }

        return $this->render('EcoleDeMusiqueWelcomeBundle:Famille:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Famille entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {

        
        $form = $this->createDeleteForm($id);
        $form->bind($request);


            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('EcoleDeMusiqueWelcomeBundle:Famille')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Famille entity.');
            }

            
                   /*Mise à null changement de la famille */
             $em2 = $this->getDoctrine()->getManager();
             $entity2 = $em2->getRepository('EcoleDeMusiqueWelcomeBundle:Eleve')->findByFamille($entity);
           
      
             
             
             if(!$entity2)
             {             
                    $em->remove($entity);
                    $em->flush();
                    $this->get('session')->getFlashBag()->add('notice', "Famille supprimer");
             }
             else
             {
                            $this->get('session')->getFlashBag()->add('notice', "Supprimez les élèves avant de supprimer la famille");
             }

        return $this->redirect($this->generateUrl('famille'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
    
    
    public function membresAction($id)
    {
         $em = $this->getDoctrine()->getManager();
         $entityFamille = $em->getRepository('EcoleDeMusiqueWelcomeBundle:Famille')->findOneById($id);
         
         $entities = $em->getRepository('EcoleDeMusiqueWelcomeBundle:Eleve')->findByFamille($entityFamille);

         
          $NomGens="";
                $NomPrec[0]="";
 
                     foreach($entities as $e)
                     { 
                           $bool=0;
                            for($i=0;$i<count($NomPrec);$i++)
                            {
                                if($e->getNom()==$NomPrec[$i] && $bool==0)
                                {
                                    $bool=1;
                                }
                            }
                            if($bool==0)
                            {
                               $NomGens=$NomGens." ".$e->getNom();
                            }
                     
                         $NomPrec[count($NomPrec)]=$e->getNom();
                     }
        
             

         
        return $this->render('EcoleDeMusiqueWelcomeBundle:Famille:membres.html.twig',array("entities"=>$entities,"idFamille"=>$NomGens));
                       
    }
    
    
    
    
}
