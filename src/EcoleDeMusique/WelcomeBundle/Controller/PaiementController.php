<?php

namespace EcoleDeMusique\WelcomeBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use EcoleDeMusique\WelcomeBundle\Entity\Paiement;
use EcoleDeMusique\WelcomeBundle\Entity\PaiementPeriode;
use EcoleDeMusique\WelcomeBundle\Form\PaiementType;
use EcoleDeMusique\WelcomeBundle\Form\PaiementPeriodeType;
use Symfony\Component\HttpFoundation\Response;

/**
 * Paiement controller.
 *
 */
class PaiementController extends Controller {

    /**
     * Lists all Paiement entities.
     *
     */
    public function indexAction(Request $request) {



        $em = $this->getDoctrine()->getManager();
        $i = 0;
        $SommePaye = 0;
        $SommeTot = 0;
        $tab = null;
        //$entPaiement = $em->getRepository('EcoleDeMusiqueWelcomeBundle:Paiement')->findAll();
        $query = $em->createQuery("SELECT p, e 
                 FROM EcoleDeMusiqueWelcomeBundle:Paiement p 
                 JOIN p.eleve e
                 ORDER BY e.nom ASC");

        $entPaiement = $query->getResult();


        $sommeToutPaiement = 0;

        //Pour chaque paiement
        foreach ($entPaiement as $paiement) {
            $sommeToutPaiement = 0;
            $tab[$i]["id"] = $paiement->getId();
            
            if ($paiement->getInterupt() == null) {
                $tab[$i]["interupt"] = "Non";
            } else {
                $tab[$i]["interupt"] = "oui";
            }

            $tab[$i]["dateInterupt"] = $paiement->getDateInterupt();
            $tab[$i]["sommePeriode"] = round($paiement->getSommePeriode(), 2);
            $tab[$i]["idEleve"] = $paiement->getEleve()->getId();
            $tab[$i]["nom"] = $paiement->getEleve()->getNom();
            $tab[$i]["prenom"] = $paiement->getEleve()->getPrenom();

            $entities = $em->getRepository('EcoleDeMusiqueWelcomeBundle:PaiementPeriode')->findBypaiement($paiement);
            //pour chaque période
            foreach ($entities as $ent) {
                if ($ent->getnumPeriod() == 1) {
                    $periode = "periode" . "1";
                }
                if ($ent->getnumPeriod() == 2) {
                    $periode = "periode" . "2";
                }
                if ($ent->getnumPeriod() == 3) {
                    $periode = "periode" . "3";
                }
                if ($ent->getnumPeriod() == 4) {
                    $periode = "periode" . "4";
                }

                $tab2["id"] = $ent->getid();
                $tab2["cb"] = $ent->getCb();
                $tab2["prelev"] = $ent->getPrelev();
                $tab2["numeraire"] = $ent->getnumeraire();
                $tab2["chequeJeune"] = $ent->getchequeJeune();
                $tab2["chequeVacance"] = $ent->getchequeVacance();
                $tab2["cheque"] = $ent->getcheque();
                $tab2["numPeriod"] = $ent->getnumPeriod();




                $tab2["dateNumeraire"] = $ent->getdateNumeraire();


                //        var_dump($tab2["dateNumeraire"]);echo "<br>";
                $tab2["dateChequeJeune"] = $ent->getdateChequeJeune();
                $tab2["dateChequeVacance"] = $ent->getdateChequeVacance();
                $tab2["dateCheque"] = $ent->getdateCheque();
                $tab2["dateCb"] = $ent->getdateCb();
                $tab2["datePrelev"] = $ent->getdatePrelev();


                $tab2["total"] = round($ent->getPrelev() + $ent->getCb() + $ent->getnumeraire() + $ent->getchequeJeune() + $ent->getchequeVacance() + $ent->getcheque(), 2);

                $tab[$i][$periode] = $tab2;
                $sommeToutPaiement = $sommeToutPaiement + $tab2["total"];
            }

            $sommeAvecRemise = $paiement->getEleve()->findSommeAvecRemise();
            $tab[$i]["totalG"] = $sommeAvecRemise;
            $tab[$i]["sommeToutPaiement"] = $sommeAvecRemise - $sommeToutPaiement;
            //Sommme argent payé
            $SommePaye = $SommePaye + $sommeToutPaiement;
            $SommeTot = $SommeTot + $paiement->getsommetotal();
           
            $i++;
        }



        $editFormDatePeriode = $this->createForm(new PaiementPeriodeType(), new PaiementPeriode());

        return $this->render('EcoleDeMusiqueWelcomeBundle:Paiement:index.html.twig', array(
                    'entities' => $tab, 'premierId' => $tab[0]["periode" . "1"]["id"], 'sommePaye' => round($SommePaye, 2), 'SommeTot' => round($SommeTot, 2), 'edit_form' => $editFormDatePeriode->createView()
        ));
    }

    /**
     * Finds and displays a Paiement entity.
     *
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EcoleDeMusiqueWelcomeBundle:Paiement')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Paiement entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EcoleDeMusiqueWelcomeBundle:Paiement:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),));
    }

    /**
     * Displays a form to create a new Paiement entity.
     *
     */
    public function newAction() {
        $entity = new Paiement();
        $form = $this->createForm(new PaiementType(), $entity);

        return $this->render('EcoleDeMusiqueWelcomeBundle:Paiement:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Creates a new Paiement entity.
     *
     */
    public function createAction(Request $request) {
        $entity = new Paiement();
        $form = $this->createForm(new PaiementType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('paiement_show', array('id' => $entity->getId())));
        }

        return $this->render('EcoleDeMusiqueWelcomeBundle:Paiement:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Paiement entity.
     *
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EcoleDeMusiqueWelcomeBundle:Paiement')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Paiement entity.');
        }

        $editForm = $this->createForm(new PaiementType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EcoleDeMusiqueWelcomeBundle:Paiement:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Paiement entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EcoleDeMusiqueWelcomeBundle:Paiement')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Paiement entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new PaiementType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('paiement_edit', array('id' => $id)));
        }

        return $this->render('EcoleDeMusiqueWelcomeBundle:Paiement:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Paiement entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('EcoleDeMusiqueWelcomeBundle:Paiement')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Paiement entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('paiement'));
    }

    private function createDeleteForm($id) {
        return $this->createFormBuilder(array('id' => $id))
                        ->add('id', 'hidden')
                        ->getForm()
        ;
    }

    public function interuptAction($id) {

        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('EcoleDeMusiqueWelcomeBundle:Paiement')->find($id);




        if ($entity->getInterupt() == false) {
            if ($_GET["tarif"] != "plein") {
                $entity->setsommeTotal($_GET["valeur"]);
            }

            //------------------------------------------//

            $entity->setInterupt(true);
            $entity->setdateInterupt(new \DateTime());
        } else {
            $entity->setsommeTotal($entity->getsommePeriode() * 4);
            $entity->setInterupt(false);
            $entity->setdateInterupt(null);
        }



        $em->persist($entity);
        $em->flush();


        return $this->redirect($this->generateUrl('paiement'));
    }

    public function searchAction() {
        $Form = $this->createForm(new PaiementType());
        return $this->render('EcoleDeMusiqueWelcomeBundle:Paiement:search.html.twig', array(
                    'form' => $Form->createView(),
        ));
    }

    public function searchResultAction(Request $request) {


        $formeuh = $request->request->get("ecoledemusique_welcomebundle_paiementtype");
        $tabParam = array();
        $em = $this->getDoctrine()->getManager();


        $sommePeriodeBas = "" ? "'%'" : $formeuh["sommePeriode"] . "";
        $sommePeriodeHaut = "" ? "'%'" : strval(intval($formeuh["sommePeriode"]) + 1);

        $sommeTotalBas = "" ? "'%'" : $formeuh["sommeTotal"] . "";
        $sommeTotalHaut = "" ? "'%'" : strval(intval($formeuh["sommeTotal"]) + 1);

        $nom = $formeuh["nom"];
        $prenom = $formeuh["prenom"];

        $cycle = $formeuh["cycle"];


        //  $nom="" ? "'%'" : $formeuh["nom"]."";
        //  $prenom="" ? "'%'" : $formeuh["prenom"]."";

        /* concaténation de la requête */
        $requete = "SELECT p, e 
                 FROM EcoleDeMusiqueWelcomeBundle:Paiement p 
                 JOIN p.eleve e
                 JOIN e.regie r";

        $temoin = "premier";

        if ($nom != "") {
            $requete = $requete . " where";
            $temoin = "second";
            $requete = $requete . " e.nom='" . $nom . "'";
        }

        if ($prenom != "") {
            if ($temoin == "premier") {
                $requete = $requete . " where";
                $temoin = "second";
            } else {
                $requete = $requete . " and";
            }
            $requete = $requete . " e.prenom ='" . $prenom . "'";
        }

        if ($cycle != "") {
            if ($temoin == "premier") {
                $requete = $requete . " where";
                $temoin = "second";
            } else {
                $requete = $requete . " and";
            }
            $requete = $requete . " r.cycleParcours =" . $cycle . "";
        }



        if ($sommePeriodeBas != "" && $sommePeriodeHaut != "") {
            if ($temoin == "premier") {
                $requete = $requete . " where";
                $temoin = "second";
            } else {
                $requete = $requete . " and";
            }
            $requete = $requete . ' p.sommePeriode >=' . $sommePeriodeBas . "and  p.sommePeriode<=" . $sommePeriodeHaut;
        }

        if ($sommeTotalBas != "" && $sommeTotalHaut != "") {
            if ($temoin == "premier") {
                $requete = $requete . " where";
                $temoin = "second";
            } else {
                $requete = $requete . " and";
            }
            $requete = $requete . ' p.sommeTotal >=' . $sommeTotalBas . "and  p.sommeTotal<=" . $sommeTotalHaut;
        }


        $requete = $requete . ' ORDER BY e.nom ASC';




        /*  $requete=$requete.'and e.id=12';
         */

        $em = $this->getDoctrine()->getEntityManager();
        $query = $em->createQuery($requete);
        $entPaiement = $query->getResult();

        $i = 0;
        $SommePaye = 0;
        $SommeTot = 0;
        $tab = null;
        $sommeToutPaiement = 0;

        foreach ($entPaiement as $paiement) {
            $sommeToutPaiement = 0;
            $tab[$i]["id"] = $paiement->getId();


            if ($paiement->getInterupt() == null) {
                $tab[$i]["interupt"] = "Non";
            } else {
                $tab[$i]["interupt"] = "oui";
            }

            $tab[$i]["dateInterupt"] = $paiement->getDateInterupt();
            $tab[$i]["sommePeriode"] = round($paiement->getSommePeriode(), 2);
            $tab[$i]["idEleve"] = $paiement->getEleve()->getId();
            $tab[$i]["nom"] = $paiement->getEleve()->getNom();
            $tab[$i]["prenom"] = $paiement->getEleve()->getPrenom();

            $entities = $em->getRepository('EcoleDeMusiqueWelcomeBundle:PaiementPeriode')->findBypaiement($paiement);
            //pour chaque période
            foreach ($entities as $ent) {
                if ($ent->getnumPeriod() == 1) {
                    $periode = "periode" . "1";
                }
                if ($ent->getnumPeriod() == 2) {
                    $periode = "periode" . "2";
                }
                if ($ent->getnumPeriod() == 3) {
                    $periode = "periode" . "3";
                }
                if ($ent->getnumPeriod() == 4) {
                    $periode = "periode" . "4";
                }

                $tab2["id"] = $ent->getid();
                $tab2["numeraire"] = $ent->getnumeraire();
                $tab2["chequeJeune"] = $ent->getchequeJeune();
                $tab2["chequeVacance"] = $ent->getchequeVacance();
                $tab2["cheque"] = $ent->getcheque();
                $tab2["cb"] = $ent->getCb();
                $tab2["prelev"] = $ent->getprelev();

                $tab2["numPeriod"] = $ent->getnumPeriod();
                $tab2["total"] = round($ent->getnumeraire() + $ent->getchequeJeune() + $ent->getchequeVacance() + $ent->getcheque() + $ent->getCb() + $ent->getPrelev(), 2);

                $tab[$i][$periode] = $tab2;
                $sommeToutPaiement = $sommeToutPaiement + $tab2["total"];
            }
            $sommeAvecRemise = $paiement->getEleve()->findSommeAvecRemise();
            $tab[$i]["totalG"] = $sommeAvecRemise;
            $tab[$i]["sommeToutPaiement"] = $sommeAvecRemise - $sommeToutPaiement;

            //Sommme argent payé
            $SommePaye = $SommePaye + $sommeToutPaiement;
            $SommeTot = $SommeTot + $paiement->getsommetotal();
            $i++;
        }



        return $this->render('EcoleDeMusiqueWelcomeBundle:Paiement:searchResult.html.twig', array('entities' => $tab, 'sommePaye' => round($SommePaye, 2), 'SommeTot' => round($SommeTot, 2), 'requete' => $requete));
    }

    public function exportOdsAction($requete) {

        //vu que les variable de session refuse de fonctionne je recupere la requete dql en param....

        $em = $this->getDoctrine()->getEntityManager();
        $query = $em->createQuery($requete);
        $entPaiement = $query->getResult();


        //on rajoute les premieres cellule

        include($_SERVER["DOCUMENT_ROOT"] . '/web/LibOds/ods.php'); //include the class and wrappers
        $object = newOds(); //create a new ods file

        $object->addCell(0, 0, 0, 'id', 'string'); //add a cell to sheet 0, row 0, cell 0, with value 1 and type float
        $object->addCell(0, 0, 1, 'interuption', 'string');
        $object->addCell(0, 0, 2, 'dat interuption', 'string');
        $object->addCell(0, 0, 3, 'Civilite', 'string');
        $object->addCell(0, 0, 4, 'nom', 'string');
        $object->addCell(0, 0, 5, 'prenom', 'string');
        $object->addCell(0, 0, 6, 'Adresse', 'string');
        $object->addCell(0, 0, 7, 'Code Postal', 'string');
        $object->addCell(0, 0, 8, 'Ville', 'string');
        $object->addCell(0, 0, 9, 'Tel Eleve', 'string');
        $object->addCell(0, 0, 10, 'Tel Mere', 'string');
        $object->addCell(0, 0, 11, 'Tel Pere', 'string');
        $object->addCell(0, 0, 12, 'Date de Naissance', 'string');
        $object->addCell(0, 0, 13, 'Mail', 'string');
        $object->addCell(0, 0, 14, 'Id Famille', 'string');
        $object->addCell(0, 0, 15, 'Qf', 'string');

        $object->addCell(0, 0, 16, 'Capv', 'string');
        $object->addCell(0, 0, 17, 'Enfant/Adulte', 'string');
        $object->addCell(0, 0, 18, 'Cycle Parcours', 'string');
        $object->addCell(0, 0, 19, 'Instrument 2', 'string');
        $object->addCell(0, 0, 20, 'Instrument 3', 'string');
        $object->addCell(0, 0, 21, 'Somme Sans Remise', 'string');
        $object->addCell(0, 0, 22, 'Remise', 'string');
        $object->addCell(0, 0, 23, 'Somme Avec Remise', 'string');
        $object->addCell(0, 0, 24, 'Annee en cours', 'string');


        $object->addCell(0, 0, 25, 'Par 4', 'string');
        /* --------------------------------------------------------- */
        $object->addCell(0, 0, 26, 'Num Per1', 'string');
        $object->addCell(0, 0, 27, 'ChequeJ Per1', 'string');
        $object->addCell(0, 0, 28, 'ChequeV Per1', 'string');
        $object->addCell(0, 0, 29, 'Cheque Per1', 'string');

        $object->addCell(0, 0, 30, 'Cb Pers1', 'string');
        $object->addCell(0, 0, 31, 'Prevelevement Pers1', 'string');

        $object->addCell(0, 0, 32, 'Total Per1', 'string');
        /* --------------------------------------------------------- */
        $object->addCell(0, 0, 33, 'Num Per2', 'string');
        $object->addCell(0, 0, 34, 'ChequeJ Per2', 'string');
        $object->addCell(0, 0, 35, 'ChequeV Per2', 'string');
        $object->addCell(0, 0, 36, 'Cheque Per2', 'string');

        $object->addCell(0, 0, 37, 'Cb Pers2', 'string');
        $object->addCell(0, 0, 38, 'Prevelevement Pers2', 'string');

        $object->addCell(0, 0, 39, 'Total Per2', 'string');
        /* --------------------------------------------------------- */
        $object->addCell(0, 0, 40, 'Num Per3', 'string');
        $object->addCell(0, 0, 41, 'ChequeJ Per3', 'string');
        $object->addCell(0, 0, 42, 'ChequeV Per3', 'string');
        $object->addCell(0, 0, 43, 'Cheque Per3', 'string');

        $object->addCell(0, 0, 44, 'Cb Pers3', 'string');
        $object->addCell(0, 0, 45, 'Prevelevement Pers3', 'string');

        $object->addCell(0, 0, 46, 'Total Per3', 'string');
        /* --------------------------------------------------------- */

        $object->addCell(0, 0, 47, 'Num Per4', 'string');
        $object->addCell(0, 0, 48, 'ChequeJ Per4', 'string');
        $object->addCell(0, 0, 50, 'ChequeV Per4', 'string');
        $object->addCell(0, 0, 51, 'Cheque Per4', 'string');

        $object->addCell(0, 0, 52, 'Cb Pers4', 'string');
        $object->addCell(0, 0, 53, 'Prevelevement Pers4', 'string');

        $object->addCell(0, 0, 54, 'Total Per4', 'string');
        /* --------------------------------------------------------- */
        $object->addCell(0, 0, 55, 'Total Général', 'string');
        $object->addCell(0, 0, 56, 'Total Reste', 'string');
        /* ----------------------------------------------------------- */
        $object->addCell(0, 0, 57, 'Instru1', 'string');
        $object->addCell(0, 0, 58, 'Instru2', 'string');
        $object->addCell(0, 0, 59, 'Instru3', 'string');
        $object->addCell(0, 0, 60, 'Pratique Collective', 'string');
        //On fait pour tout les paiements 

        $i = 0;
        $tab = null;
        $sommeToutPaiement = 0;
        $tot = 0;

        foreach ($entPaiement as $paiement) {
            $sommeToutPaiement = 0;


            $object->addCell(0, $i + 1, 0, $paiement->getId(), 'float');

            if ($paiement->getInterupt() == null) {
                $object->addCell(0, $i + 1, 1, "Non", "string");
            } else {
                $object->addCell(0, $i + 1, 1, "oui", "string");
            }

            if ($paiement->getDateInterupt() != NULL) {
                $object->addCell(0, $i + 1, 2, date_format($paiement->getDateInterupt(), 'd-m-Y'), "string");
            } else {
                $object->addCell(0, $i + 1, 2, "", "string");
            }

            /* Info Eleve */


            $object->addCell(0, $i + 1, 3, $paiement->getEleve()->getCivilite(), "string");
            $object->addCell(0, $i + 1, 4, $paiement->getEleve()->getNom(), "string");
            $object->addCell(0, $i + 1, 5, $paiement->getEleve()->getPrenom(), "string");
            $object->addCell(0, $i + 1, 6, $paiement->getEleve()->getAdresse(), "string");
            $object->addCell(0, $i + 1, 7, $paiement->getEleve()->getCodePostal(), "string");
            $object->addCell(0, $i + 1, 8, $paiement->getEleve()->getVille(), "string");
            $object->addCell(0, $i + 1, 9, $paiement->getEleve()->getTelEleve(), "string");
            $object->addCell(0, $i + 1, 10, $paiement->getEleve()->getTelMere(), "string");
            $object->addCell(0, $i + 1, 11, $paiement->getEleve()->getTelPere(), "string");

            if ($paiement->getEleve()->getDateDeNaissance() != NULL) {
                $object->addCell(0, $i + 1, 12, date_format($paiement->getEleve()->getDateDeNaissance(), 'd-m-Y'), "string");
            } else {
                $object->addCell(0, $i + 1, 12, "", "string");
            }

            $object->addCell(0, $i + 1, 13, $paiement->getEleve()->getMail(), "string");
            $object->addCell(0, $i + 1, 14, $paiement->getEleve()->getFamille()->getId(), "string");
            $object->addCell(0, $i + 1, 15, $paiement->getEleve()->getFamille()->getQf(), "string");



            /* Info Regie */

            if ($paiement->getEleve()->getRegie()->getCapv() == TRUE) {
                $object->addCell(0, $i + 1, 16, "oui", "string");
            } else {
                $object->addCell(0, $i + 1, 16, "non", "string");
            }

            if ($paiement->getEleve()->getRegie()->getEnfantAdulte() == TRUE) {
                $object->addCell(0, $i + 1, 17, "Adulte", "string");
            } else {
                $object->addCell(0, $i + 1, 17, "Enfant", "string");
            }

            $object->addCell(0, $i + 1, 18, $paiement->getEleve()->getRegie()->getCycleParcours(), "float");



            $object->addCell(0, $i + 1, 19, $paiement->getEleve()->getRegie()->getIntru2(), "string");
            $object->addCell(0, $i + 1, 20, $paiement->getEleve()->getRegie()->getIntru3(), "string");

            $object->addCell(0, $i + 1, 21, $paiement->getEleve()->getRegie()->getSommeSansRemise(), "float");
            $object->addCell(0, $i + 1, 22, $paiement->getEleve()->getRegie()->getRemise(), "float");
            $object->addCell(0, $i + 1, 23, $paiement->getEleve()->getRegie()->getSommeAvecRemise(), "float");
            $object->addCell(0, $i + 1, 24, $paiement->getEleve()->getRegie()->getAnneDeCours(), "float");

            /* Periode Paiement */
            $object->addCell(0, $i + 1, 25, round($paiement->getSommePeriode(), 2), "float");
            $entities = $em->getRepository('EcoleDeMusiqueWelcomeBundle:PaiementPeriode')->findBypaiement($paiement);
            //pour chaque période
            foreach ($entities as $ent) {
                if ($ent->getnumPeriod() == 1) {
                    $periode = "periode" . "1";
                }
                if ($ent->getnumPeriod() == 2) {
                    $periode = "periode" . "2";
                }
                if ($ent->getnumPeriod() == 3) {
                    $periode = "periode" . "3";
                }
                if ($ent->getnumPeriod() == 4) {
                    $periode = "periode" . "4";
                }

                if ($ent->getnumPeriod() == 1) {
                    if ($ent->getnumeraire()) {
                        $object->addCell(0, $i + 1, 26, $ent->getnumeraire(), "float");
                    } else {
                        $object->addCell(0, $i + 1, 26, 0, "float");
                    }
                    if ($ent->getchequeJeune()) {
                        $object->addCell(0, $i + 1, 27, $ent->getchequeJeune(), "float");
                    } else {
                        $object->addCell(0, $i + 1, 27, 0, "float");
                    }
                    if ($ent->getchequeVacance()) {
                        $object->addCell(0, $i + 1, 28, $ent->getchequeVacance(), "float");
                    } else {
                        $object->addCell(0, $i + 1, 28, 0, "float");
                    }
                    if ($ent->getcheque()) {
                        $object->addCell(0, $i + 1, 29, $ent->getcheque(), "float");
                    } else {
                        $object->addCell(0, $i + 1, 29, 0, "float");
                    }
                    if ($ent->getCb()) {
                        $object->addCell(0, $i + 1, 30, $ent->getCb(), "float");
                    } else {
                        $object->addCell(0, $i + 1, 30, 0, "float");
                    }
                    if ($ent->getPrelev()) {
                        $object->addCell(0, $i + 1, 31, $ent->getPrelev(), "float");
                    } else {
                        $object->addCell(0, $i + 1, 31, 0, "float");
                    }

                    $object->addCell(0, $i + 1, 32, round($ent->getnumeraire() + $ent->getchequeJeune() + $ent->getchequeVacance() + $ent->getcheque() + $ent->getPrelev() + $ent->getCb(), 2), "float");
                    $tot = $ent->getnumeraire() + $ent->getchequeJeune() + $ent->getchequeVacance() + $ent->getcheque() + $ent->getPrelev() + $ent->getCb();
                }



                if ($ent->getnumPeriod() == 2) {
                    if ($ent->getnumeraire()) {
                        $object->addCell(0, $i + 1, 33, $ent->getnumeraire(), "float");
                    } else {
                        $object->addCell(0, $i + 1, 33, 0, "float");
                    }
                    if ($ent->getchequeJeune()) {
                        $object->addCell(0, $i + 1, 34, $ent->getchequeJeune(), "float");
                    } else {
                        $object->addCell(0, $i + 1, 34, 0, "float");
                    }
                    if ($ent->getchequeVacance()) {
                        $object->addCell(0, $i + 1, 35, $ent->getchequeVacance(), "float");
                    } else {
                        $object->addCell(0, $i + 1, 35, 0, "float");
                    }
                    if ($ent->getcheque()) {
                        $object->addCell(0, $i + 1, 36, $ent->getcheque(), "float");
                    } else {
                        $object->addCell(0, $i + 1, 36, 0, "float");
                    }

                    if ($ent->getCb()) {
                        $object->addCell(0, $i + 1, 37, $ent->getCb(), "float");
                    } else {
                        $object->addCell(0, $i + 1, 37, 0, "float");
                    }
                    if ($ent->getPrelev()) {
                        $object->addCell(0, $i + 1, 38, $ent->getPrelev(), "float");
                    } else {
                        $object->addCell(0, $i + 1, 38, 0, "float");
                    }

                    $object->addCell(0, $i + 1, 39, round($ent->getnumeraire() + $ent->getchequeJeune() + $ent->getchequeVacance() + $ent->getcheque() + $ent->getPrelev() + $ent->getCb(), 2), "float");
                    $tot = $ent->getnumeraire() + $ent->getchequeJeune() + $ent->getchequeVacance() + $ent->getcheque() + $ent->getPrelev() + $ent->getCb();
                }

                if ($ent->getnumPeriod() == 3) {
                    if ($ent->getnumeraire()) {
                        $object->addCell(0, $i + 1, 40, $ent->getnumeraire(), "float");
                    } else {
                        $object->addCell(0, $i + 1, 40, 0, "float");
                    }
                    if ($ent->getchequeJeune()) {
                        $object->addCell(0, $i + 1, 41, $ent->getchequeJeune(), "float");
                    } else {
                        $object->addCell(0, $i + 1, 41, 0, "float");
                    }
                    if ($ent->getchequeVacance()) {
                        $object->addCell(0, $i + 1, 42, $ent->getchequeVacance(), "float");
                    } else {
                        $object->addCell(0, $i + 1, 42, 0, "float");
                    }
                    if ($ent->getcheque()) {
                        $object->addCell(0, $i + 1, 43, $ent->getcheque(), "float");
                    } else {
                        $object->addCell(0, $i + 1, 43, 0, "float");
                    }

                    if ($ent->getCb()) {
                        $object->addCell(0, $i + 1, 44, $ent->getCb(), "float");
                    } else {
                        $object->addCell(0, $i + 1, 44, 0, "float");
                    }
                    if ($ent->getPrelev()) {
                        $object->addCell(0, $i + 1, 45, $ent->getPrelev(), "float");
                    } else {
                        $object->addCell(0, $i + 1, 45, 0, "float");
                    }

                    $object->addCell(0, $i + 1, 46, round($ent->getnumeraire() + $ent->getchequeJeune() + $ent->getchequeVacance() + $ent->getcheque() + $ent->getPrelev() + $ent->getCb(), 2), "float");
                    $tot = $ent->getnumeraire() + $ent->getchequeJeune() + $ent->getchequeVacance() + $ent->getcheque() + $ent->getPrelev() + $ent->getCb();
                }

                if ($ent->getnumPeriod() == 4) {
                    if ($ent->getnumeraire()) {
                        $object->addCell(0, $i + 1, 47, $ent->getnumeraire(), "float");
                    } else {
                        $object->addCell(0, $i + 1, 47, 0, "float");
                    }
                    if ($ent->getchequeJeune()) {
                        $object->addCell(0, $i + 1, 48, $ent->getchequeJeune(), "float");
                    } else {
                        $object->addCell(0, $i + 1, 48, 0, "float");
                    }
                    if ($ent->getchequeVacance()) {
                        $object->addCell(0, $i + 1, 49, $ent->getchequeVacance(), "float");
                    } else {
                        $object->addCell(0, $i + 1, 49, 0, "float");
                    }
                    if ($ent->getcheque()) {
                        $object->addCell(0, $i + 1, 50, $ent->getcheque(), "float");
                    } else {
                        $object->addCell(0, $i + 1, 50, 0, "float");
                    }

                    if ($ent->getCb()) {
                        $object->addCell(0, $i + 1, 51, $ent->getCb(), "float");
                    } else {
                        $object->addCell(0, $i + 1, 51, 0, "float");
                    }
                    if ($ent->getPrelev()) {
                        $object->addCell(0, $i + 1, 52, $ent->getPrelev(), "float");
                    } else {
                        $object->addCell(0, $i + 1, 52, 0, "float");
                    }


                    $object->addCell(0, $i + 1, 53, round($ent->getnumeraire() + $ent->getchequeJeune() + $ent->getchequeVacance() + $ent->getcheque() + $ent->getPrelev() + $ent->getCb(), 2), "float");
                    $tot = $ent->getnumeraire() + $ent->getchequeJeune() + $ent->getchequeVacance() + $ent->getcheque() + $ent->getPrelev() + $ent->getCb();
                }


                $sommeToutPaiement = $sommeToutPaiement + $tot;
            }


            $object->addCell(0, $i + 1, 54, $paiement->getEleve()->getRegie()->getSommeAvecRemise(), "float");
            $object->addCell(0, $i + 1, 55, $paiement->getEleve()->getRegie()->getSommeAvecRemise() - $sommeToutPaiement, "float");

            /* ------------------------ Activite ----------------------------------- */
            $em = $this->getDoctrine()->getEntityManager();
            $entityActiviteEleve = $em->getRepository('EcoleDeMusiqueWelcomeBundle:ActiviteEleve')->findOneBy(array("type" => "instru1", "eleve" => $paiement->geteleve()));
            if ($entityActiviteEleve != NULL) {
                $object->addCell(0, $i + 1, 57, $entityActiviteEleve->getActivite()->getNom(), "string");
            } else {
                $object->addCell(0, $i + 1, 57, "", "string");
            }


            $entityActiviteEleve2 = $em->getRepository('EcoleDeMusiqueWelcomeBundle:ActiviteEleve')->findOneBy(array("type" => "instru2", "eleve" => $paiement->geteleve()));
            if ($entityActiviteEleve2 != NULL) {
                $object->addCell(0, $i + 1, 58, $entityActiviteEleve2->getActivite()->getNom(), "string");
            } else {
                $object->addCell(0, $i + 1, 58, "", "string");
            }


            $entityActiviteEleve3 = $em->getRepository('EcoleDeMusiqueWelcomeBundle:ActiviteEleve')->findOneBy(array("type" => "instru3", "eleve" => $paiement->geteleve()));
            if ($entityActiviteEleve3 != NULL) {
                $object->addCell(0, $i + 1, 59, $entityActiviteEleve3->getActivite()->getNom(), "string");
            } else {
                $object->addCell(0, $i + 1, 59, "", "string");
            }


            $entityActiviteEleve4 = $em->getRepository('EcoleDeMusiqueWelcomeBundle:ActiviteEleve')->findOneBy(array("type" => "pratique collective", "eleve" => $paiement->geteleve()));
            if ($entityActiviteEleve4 != NULL) {
                $object->addCell(0, $i + 1, 60, $entityActiviteEleve4->getActivite()->getNom(), "string");
            } else {
                $object->addCell(0, $i + 1, 60, "", "string");
            }



            /*   $tab[$i]["totalG"]=$paiement->getsommetotal();
              $tab[$i]["sommeToutPaiement"]=$tab[$i]["totalG"]-$sommeToutPaiement; */
            $i++;
        }


        //----------------------------------------------------------------------------------------------------//        


        saveOds($object, $_SERVER["DOCUMENT_ROOT"] . '/web/odsExport/exportPaiement.ods'); //save the object to a ods file





        $fichier = "exportPaiement.ods";
        $chemin = $_SERVER["DOCUMENT_ROOT"] . '/web/odsExport/'; // emplacement de votre fichier .pdf

        $response = new Response();
        $response->setContent(file_get_contents($chemin . $fichier));
        $response->headers->set('Content-Type', 'application/force-download'); // modification du content-type pour forcer le téléchargement (sinon le navigateur internet essaie d'afficher le document)
        $response->headers->set('Content-disposition', 'filename=' . $fichier);

        return $response;
    }

}
