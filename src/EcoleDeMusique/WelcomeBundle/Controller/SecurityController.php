<?php
// src/VotreNom/VitrineBundle/Controller/SecurityController.php;
namespace EcoleDeMusique\WelcomeBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
class SecurityController extends Controller {

public function loginAction() {

$request = $this->getRequest();
$session = $request->getSession();
    // récupérer les erreurs de login s'il y en a
    if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
        $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
    } else {
        $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
        $session->remove(SecurityContext::AUTHENTICATION_ERROR);
    }
        return $this->render('EcoleDeMusiqueWelcomeBundle:Security:login.html.twig', array(
        // dernier login entré par l'utilisateur
        'last_username' => $session->get(SecurityContext::LAST_USERNAME),
        'error' => $error,
        ));
}
}
?>