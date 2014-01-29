<?php

namespace EcoleDeMusique\WelcomeBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use EcoleDeMusique\WelcomeBundle\Entity\Mailing;
use EcoleDeMusique\WelcomeBundle\Form\MailingType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use EcoleDeMusique\WelcomeBundle\Form\RechercheEleveType;
use EcoleDeMusique\WelcomeBundle\Entity\RechercheEleve;
use EcoleDeMusique\WelcomeBundle\Entity\Activite;
use EcoleDeMusique\WelcomeBundle\Entity\ActiviteEleve;

class MailingController extends Controller
{
    public function indexAction(Request $request){
       $repository = $this->getDoctrine()->getManager()->getRepository('EcoleDeMusiqueWelcomeBundle:Mailing');
       $liste_mailing =$repository->findAll();
       $rechercheEleve = new RechercheEleve();
       $request = $this->getRequest();
       $form = $this->createForm(new RechercheEleveType(),$rechercheEleve);
       if ($request->isMethod('POST')) {
           $form->bind($request);
           if ($form->isValid()) {
               $mailing=new Mailing();
                $liste_rechercheEleve = $form->get('activiteEleve')->getData();
                $tab = array();
                $i=0;
                $tab[$i]="Toutes les activités";
                for ($i=0;$i<sizeof($liste_rechercheEleve);$i++){
                        $tab[$i]=$liste_rechercheEleve->getNom();
                }
                if($i==0){
                  $mailing->setNomActivite($tab[$i]);
                }else{
                  $mailing->setNomActivite($tab[$i-1]);
                }

              $form = $this->createForm(new MailingType(),$mailing);

            return $this->render('EcoleDeMusiqueWelcomeBundle:Mailing:search.html.twig', array(
            'form'=> $form->createView(),'mailing'=>$mailing));
       }
                  }
           return $this->render('EcoleDeMusiqueWelcomeBundle:Mailing:index.html.twig', array(
                      'form'   => $form->createView(),'liste_mailing'=>$liste_mailing  ));    
       }
       
    public function searchAction(Request $request)
    {
     
        return $this->indexAction($request);   
 }

    public function createAction (Request $request){
        $entity  = new Mailing();
        $form = $this->createForm(new MailingType(), $entity);
        $form->bind($request);
        if ($form->isValid()) {
            $tab = array();
            $concat='';
            $i=0;
            foreach ($entity->getActiviteEleves() as $ent){
                $tab[$i] = $ent->getEleve()->getMail();
                $concat=$concat .$tab[$i]. ';';
                $i++;
            }
            $concat=$concat . ' ['. date("d-m-Y H:i:s") .']; ';
            //envoie du message de type swift mail
            $message = \Swift_Message::newInstance()
            ->setSubject($entity->getTitre())
            ->setFrom('ecoledemusique@ville-voreppe.fr')				
            ->setBcc($tab)
            ->setBody($entity->getMessage());
            $this->get('mailer')->send($message);
             $message2 = \Swift_Message::newInstance()
            ->setSubject($entity->getTitre())
            ->setFrom('ecoledemusique@ville-voreppe.fr')				
            ->setTo('ecoledemusique@ville-voreppe.fr')
            ->setBody( $concat .  '    ' .$entity->getMessage());
            $this->get('mailer')->send($message2);
            $entity->setMessage($concat. '    ' .$entity->getMessage());
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            
            $this->get('session')->getFlashBag()->add('notice', "Mail envoyé avec succès");                      
            //redirection sur le mailing
            return $this->redirect($this->generateUrl('mailing'));
        }

        return $this->render('EcoleDeMusiqueWelcomeBundle:Mailing:search.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }
    
    
    public function deleteAction($id){
       
        
        $mailing = $this->getDoctrine()->getRepository('EcoleDeMusiqueWelcomeBundle:Mailing')->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($mailing);
        $em->flush();
        $this->get('session')->getFlashBag()->add('notice', "Mail supprimé avec succès");  
        
        $repository = $this->getDoctrine()->getManager()->getRepository('EcoleDeMusiqueWelcomeBundle:Mailing');
       $liste_mailing =$repository->findAll();
       $rechercheEleve = new RechercheEleve();
       $form = $this->createForm(new RechercheEleveType(),$rechercheEleve);
          return $this->render('EcoleDeMusiqueWelcomeBundle:Mailing:index.html.twig', array(
                      'form'   => $form->createView(),'liste_mailing'=>$liste_mailing  ));  
    }
            
   
}