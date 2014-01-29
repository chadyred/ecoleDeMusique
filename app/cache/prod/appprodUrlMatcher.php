<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appprodUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        // ecole_de_musique_welcome_homepage
        if ($pathinfo === '/ecoledemusique') {
            return array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\DefaultController::indexAction',  '_route' => 'ecole_de_musique_welcome_homepage',);
        }

        // ecole_de_musique_welcome_homepage2
        if ($pathinfo === '/home') {
            return array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\DefaultController::indexAction',  '_route' => 'ecole_de_musique_welcome_homepage2',);
        }

        // ecole_de_musique_welcome_formules
        if ($pathinfo === '/formules') {
            return array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\DefaultController::formulesAction',  '_route' => 'ecole_de_musique_welcome_formules',);
        }

        // ecole_de_musique_welcome_formulesChangement
        if ($pathinfo === '/formulesChangement') {
            return array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\DefaultController::formulesChangementAction',  '_route' => 'ecole_de_musique_welcome_formulesChangement',);
        }

        // ecole_de_musique_welcome_appliquerTarification
        if ($pathinfo === '/appliquerTarification') {
            return array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\DefaultController::appliquerTarificationAction',  '_route' => 'ecole_de_musique_welcome_appliquerTarification',);
        }

        if (0 === strpos($pathinfo, '/regie')) {
            // regie
            if ($pathinfo === '/regie/consult') {
                return array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\RegieController::indexAction',  '_route' => 'regie',);
            }

            // regie_simul
            if ($pathinfo === '/regie/simulation') {
                return array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\RegieController::simulationAction',  '_route' => 'regie_simul',);
            }

            // regie_simulationApplication
            if ($pathinfo === '/regie/simulationApplication') {
                return array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\RegieController::simulationApplicationAction',  '_route' => 'regie_simulationApplication',);
            }

            // regie_show
            if (preg_match('#^/regie/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\RegieController::showAction',)), array('_route' => 'regie_show'));
            }

            // regie_new
            if ($pathinfo === '/regie/new') {
                return array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\RegieController::newAction',  '_route' => 'regie_new',);
            }

            // regie_create
            if ($pathinfo === '/regie/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_regie_create;
                }

                return array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\RegieController::createAction',  '_route' => 'regie_create',);
            }
            not_regie_create:

            // regie_edit
            if (preg_match('#^/regie/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\RegieController::editAction',)), array('_route' => 'regie_edit'));
            }

            // regie_update
            if (preg_match('#^/regie/(?P<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_regie_update;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\RegieController::updateAction',)), array('_route' => 'regie_update'));
            }
            not_regie_update:

            // regie_delete
            if (preg_match('#^/regie/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_regie_delete;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\RegieController::deleteAction',)), array('_route' => 'regie_delete'));
            }
            not_regie_delete:

        }

        if (0 === strpos($pathinfo, '/eleve')) {
            // eleve
            if (rtrim($pathinfo, '/') === '/eleve') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'eleve');
                }

                return array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\EleveController::indexAction',  '_route' => 'eleve',);
            }

            // eleve_show
            if (preg_match('#^/eleve/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\EleveController::showAction',)), array('_route' => 'eleve_show'));
            }

            // eleve_new
            if ($pathinfo === '/eleve/new') {
                return array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\EleveController::newAction',  '_route' => 'eleve_new',);
            }

            // eleve_create
            if ($pathinfo === '/eleve/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_eleve_create;
                }

                return array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\EleveController::createAction',  '_route' => 'eleve_create',);
            }
            not_eleve_create:

            // eleve_edit
            if (preg_match('#^/eleve/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\EleveController::editAction',)), array('_route' => 'eleve_edit'));
            }

            // eleve_update
            if (preg_match('#^/eleve/(?P<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_eleve_update;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\EleveController::updateAction',)), array('_route' => 'eleve_update'));
            }
            not_eleve_update:

            // eleve_delete
            if (preg_match('#^/eleve/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_eleve_delete;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\EleveController::deleteAction',)), array('_route' => 'eleve_delete'));
            }
            not_eleve_delete:

        }

        if (0 === strpos($pathinfo, '/famille')) {
            // famille
            if (rtrim($pathinfo, '/') === '/famille') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'famille');
                }

                return array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\FamilleController::indexAction',  '_route' => 'famille',);
            }

            // famille_show
            if (preg_match('#^/famille/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\FamilleController::showAction',)), array('_route' => 'famille_show'));
            }

            // famille_new
            if ($pathinfo === '/famille/new') {
                return array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\FamilleController::newAction',  '_route' => 'famille_new',);
            }

            // famille_create
            if ($pathinfo === '/famille/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_famille_create;
                }

                return array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\FamilleController::createAction',  '_route' => 'famille_create',);
            }
            not_famille_create:

            // famille_edit
            if (preg_match('#^/famille/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\FamilleController::editAction',)), array('_route' => 'famille_edit'));
            }

            // famille_update
            if (preg_match('#^/famille/(?P<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_famille_update;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\FamilleController::updateAction',)), array('_route' => 'famille_update'));
            }
            not_famille_update:

            // famille_delete
            if (preg_match('#^/famille/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_famille_delete;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\FamilleController::deleteAction',)), array('_route' => 'famille_delete'));
            }
            not_famille_delete:

            // famille_membre
            if (preg_match('#^/famille/(?P<id>[^/]+)/membre$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_famille_membre;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\FamilleController::membresAction',)), array('_route' => 'famille_membre'));
            }
            not_famille_membre:

        }

        if (0 === strpos($pathinfo, '/paiementperiode')) {
            // paiementperiode
            if (rtrim($pathinfo, '/') === '/paiementperiode') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'paiementperiode');
                }

                return array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\PaiementPeriodeController::indexAction',  '_route' => 'paiementperiode',);
            }

            // paiementperiode_show
            if (preg_match('#^/paiementperiode/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\PaiementPeriodeController::showAction',)), array('_route' => 'paiementperiode_show'));
            }

            // paiementperiode_new
            if ($pathinfo === '/paiementperiode/new') {
                return array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\PaiementPeriodeController::newAction',  '_route' => 'paiementperiode_new',);
            }

            // paiementperiode_create
            if ($pathinfo === '/paiementperiode/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_paiementperiode_create;
                }

                return array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\PaiementPeriodeController::createAction',  '_route' => 'paiementperiode_create',);
            }
            not_paiementperiode_create:

            // paiementperiode_edit
            if (preg_match('#^/paiementperiode/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\PaiementPeriodeController::editAction',)), array('_route' => 'paiementperiode_edit'));
            }

            // paiementperiode_update
            if (preg_match('#^/paiementperiode/(?P<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_paiementperiode_update;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\PaiementPeriodeController::updateAction',)), array('_route' => 'paiementperiode_update'));
            }
            not_paiementperiode_update:

            // paiementperiode_delete
            if (preg_match('#^/paiementperiode/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_paiementperiode_delete;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\PaiementPeriodeController::deleteAction',)), array('_route' => 'paiementperiode_delete'));
            }
            not_paiementperiode_delete:

            // paiementperiode_updateDate
            if ($pathinfo === '/paiementperiode/updateDate') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_paiementperiode_updateDate;
                }

                return array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\PaiementPeriodeController::updateDateAction',  '_route' => 'paiementperiode_updateDate',);
            }
            not_paiementperiode_updateDate:

        }

        if (0 === strpos($pathinfo, '/paiement')) {
            // paiement
            if (rtrim($pathinfo, '/') === '/paiement') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'paiement');
                }

                return array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\PaiementController::indexAction',  '_route' => 'paiement',);
            }

            // paiement_show
            if (preg_match('#^/paiement/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\PaiementController::showAction',)), array('_route' => 'paiement_show'));
            }

            // paiement_new
            if ($pathinfo === '/paiement/new') {
                return array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\PaiementController::newAction',  '_route' => 'paiement_new',);
            }

            // paiement_create
            if ($pathinfo === '/paiement/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_paiement_create;
                }

                return array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\PaiementController::createAction',  '_route' => 'paiement_create',);
            }
            not_paiement_create:

            // paiement_edit
            if (preg_match('#^/paiement/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\PaiementController::editAction',)), array('_route' => 'paiement_edit'));
            }

            // paiement_update
            if (preg_match('#^/paiement/(?P<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_paiement_update;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\PaiementController::updateAction',)), array('_route' => 'paiement_update'));
            }
            not_paiement_update:

            // paiement_delete
            if (preg_match('#^/paiement/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_paiement_delete;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\PaiementController::deleteAction',)), array('_route' => 'paiement_delete'));
            }
            not_paiement_delete:

            // paiement_interupt
            if (preg_match('#^/paiement/(?P<id>[^/]+)/interupt$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_paiement_interupt;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\PaiementController::interuptAction',)), array('_route' => 'paiement_interupt'));
            }
            not_paiement_interupt:

            // paiement_search
            if ($pathinfo === '/paiement/search') {
                return array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\PaiementController::searchAction',  '_route' => 'paiement_search',);
            }

            // paiement_searchResult
            if ($pathinfo === '/paiement/searchResult') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_paiement_searchResult;
                }

                return array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\PaiementController::searchResultAction',  '_route' => 'paiement_searchResult',);
            }
            not_paiement_searchResult:

            // paiement_exportOds
            if (0 === strpos($pathinfo, '/paiement/exportOds') && preg_match('#^/paiement/exportOds/(?P<requete>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\PaiementController::exportOdsAction',)), array('_route' => 'paiement_exportOds'));
            }

        }

        if (0 === strpos($pathinfo, '/archive')) {
            // archive
            if (rtrim($pathinfo, '/') === '/archive') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'archive');
                }

                return array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\ArchiveController::indexAction',  '_route' => 'archive',);
            }

            // archive_show
            if (preg_match('#^/archive/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\ArchiveController::showAction',)), array('_route' => 'archive_show'));
            }

            // archive_new
            if ($pathinfo === '/archive/new') {
                return array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\ArchiveController::newAction',  '_route' => 'archive_new',);
            }

            // archive_create
            if ($pathinfo === '/archive/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_archive_create;
                }

                return array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\ArchiveController::createAction',  '_route' => 'archive_create',);
            }
            not_archive_create:

            // archive_create_all
            if ($pathinfo === '/archive/createall') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_archive_create_all;
                }

                return array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\ArchiveController::createallAction',  '_route' => 'archive_create_all',);
            }
            not_archive_create_all:

            // archive_edit
            if (preg_match('#^/archive/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\ArchiveController::editAction',)), array('_route' => 'archive_edit'));
            }

            // archive_update
            if (preg_match('#^/archive/(?P<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_archive_update;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\ArchiveController::updateAction',)), array('_route' => 'archive_update'));
            }
            not_archive_update:

            // archive_delete
            if (preg_match('#^/archive/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_archive_delete;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\ArchiveController::deleteAction',)), array('_route' => 'archive_delete'));
            }
            not_archive_delete:

        }

        if (0 === strpos($pathinfo, '/activite')) {
            // activite
            if (rtrim($pathinfo, '/') === '/activite') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'activite');
                }

                return array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\ActiviteController::indexAction',  '_route' => 'activite',);
            }

            // activite_show
            if (preg_match('#^/activite/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\ActiviteController::showAction',)), array('_route' => 'activite_show'));
            }

            // activite_new
            if ($pathinfo === '/activite/new') {
                return array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\ActiviteController::newAction',  '_route' => 'activite_new',);
            }

            // activite_create
            if ($pathinfo === '/activite/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_activite_create;
                }

                return array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\ActiviteController::createAction',  '_route' => 'activite_create',);
            }
            not_activite_create:

            // activite_edit
            if (preg_match('#^/activite/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\ActiviteController::editAction',)), array('_route' => 'activite_edit'));
            }

            // activite_update
            if (preg_match('#^/activite/(?P<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_activite_update;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\ActiviteController::updateAction',)), array('_route' => 'activite_update'));
            }
            not_activite_update:

            // activite_delete
            if (preg_match('#^/activite/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_activite_delete;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\ActiviteController::deleteAction',)), array('_route' => 'activite_delete'));
            }
            not_activite_delete:

            // activite_sommaire
            if ($pathinfo === '/activite/sommaire') {
                return array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\ActiviteController::sommaireAction',  '_route' => 'activite_sommaire',);
            }

        }

        if (0 === strpos($pathinfo, '/activiteeleve')) {
            // activiteeleve
            if (rtrim($pathinfo, '/') === '/activiteeleve') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'activiteeleve');
                }

                return array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\ActiviteEleveController::indexAction',  '_route' => 'activiteeleve',);
            }

            // activiteeleve_show
            if (preg_match('#^/activiteeleve/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\ActiviteEleveController::showAction',)), array('_route' => 'activiteeleve_show'));
            }

            // activiteeleve_new
            if ($pathinfo === '/activiteeleve/new') {
                return array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\ActiviteEleveController::newAction',  '_route' => 'activiteeleve_new',);
            }

            // activiteeleve_create
            if ($pathinfo === '/activiteeleve/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_activiteeleve_create;
                }

                return array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\ActiviteEleveController::createAction',  '_route' => 'activiteeleve_create',);
            }
            not_activiteeleve_create:

            // activiteeleve_edit
            if (preg_match('#^/activiteeleve/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\ActiviteEleveController::editAction',)), array('_route' => 'activiteeleve_edit'));
            }

            // activiteeleve_update
            if (preg_match('#^/activiteeleve/(?P<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_activiteeleve_update;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\ActiviteEleveController::updateAction',)), array('_route' => 'activiteeleve_update'));
            }
            not_activiteeleve_update:

            // activiteeleve_delete
            if (preg_match('#^/activiteeleve/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_activiteeleve_delete;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\ActiviteEleveController::deleteAction',)), array('_route' => 'activiteeleve_delete'));
            }
            not_activiteeleve_delete:

            // activiteeleve_search
            if ($pathinfo === '/activiteeleve/searchActiviteEleve') {
                return array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\ActiviteEleveController::searchAction',  '_route' => 'activiteeleve_search',);
            }

            // activiteeleve_searchResult
            if ($pathinfo === '/activiteeleve/searchResult') {
                return array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\ActiviteEleveController::searchResultAction',  '_route' => 'activiteeleve_searchResult',);
            }

        }

        if (0 === strpos($pathinfo, '/cours')) {
            // cours
            if (rtrim($pathinfo, '/') === '/cours') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'cours');
                }

                return array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\CoursController::indexAction',  '_route' => 'cours',);
            }

            // cours_show
            if (preg_match('#^/cours/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\CoursController::showAction',)), array('_route' => 'cours_show'));
            }

            // cours_new
            if ($pathinfo === '/cours/new') {
                return array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\CoursController::newAction',  '_route' => 'cours_new',);
            }

            // cours_create
            if ($pathinfo === '/cours/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_cours_create;
                }

                return array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\CoursController::createAction',  '_route' => 'cours_create',);
            }
            not_cours_create:

            // cours_edit
            if (preg_match('#^/cours/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\CoursController::editAction',)), array('_route' => 'cours_edit'));
            }

            // cours_update
            if (preg_match('#^/cours/(?P<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_cours_update;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\CoursController::updateAction',)), array('_route' => 'cours_update'));
            }
            not_cours_update:

            // cours_delete
            if (preg_match('#^/cours/(?P<id>[^/]+)/(?P<mode>[^/]+)/(?P<name>[^/]+)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_cours_delete;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\CoursController::deleteAction',)), array('_route' => 'cours_delete'));
            }
            not_cours_delete:

            // cours_new_collectif
            if ($pathinfo === '/cours/newcol') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_cours_new_collectif;
                }

                return array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\CoursController::collectifAction',  '_route' => 'cours_new_collectif',);
            }
            not_cours_new_collectif:

            // cours_create_collectif
            if ($pathinfo === '/cours/createcol') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_cours_create_collectif;
                }

                return array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\CoursController::createCollectifAction',  '_route' => 'cours_create_collectif',);
            }
            not_cours_create_collectif:

            // cours_rechargeActivite
            if ($pathinfo === '/cours/rechargeactivite') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_cours_rechargeActivite;
                }

                return array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\CoursController::rechargeActiviteAction',  '_route' => 'cours_rechargeActivite',);
            }
            not_cours_rechargeActivite:

        }

        if (0 === strpos($pathinfo, '/courseleve')) {
            // courseleve
            if (rtrim($pathinfo, '/') === '/courseleve') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'courseleve');
                }

                return array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\CoursEleveController::indexAction',  '_route' => 'courseleve',);
            }

            // courseleve_show
            if (preg_match('#^/courseleve/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\CoursEleveController::showAction',)), array('_route' => 'courseleve_show'));
            }

            // courseleve_new
            if ($pathinfo === '/courseleve/new') {
                return array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\CoursEleveController::newAction',  '_route' => 'courseleve_new',);
            }

            // courseleve_create
            if ($pathinfo === '/courseleve/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_courseleve_create;
                }

                return array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\CoursEleveController::createAction',  '_route' => 'courseleve_create',);
            }
            not_courseleve_create:

            // courseleve_edit
            if (preg_match('#^/courseleve/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\CoursEleveController::editAction',)), array('_route' => 'courseleve_edit'));
            }

            // courseleve_update
            if (preg_match('#^/courseleve/(?P<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_courseleve_update;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\CoursEleveController::updateAction',)), array('_route' => 'courseleve_update'));
            }
            not_courseleve_update:

            // courseleve_delete
            if (preg_match('#^/courseleve/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_courseleve_delete;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\CoursEleveController::deleteAction',)), array('_route' => 'courseleve_delete'));
            }
            not_courseleve_delete:

        }

        if (0 === strpos($pathinfo, '/prof')) {
            // prof
            if (rtrim($pathinfo, '/') === '/prof') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'prof');
                }

                return array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\ProfController::indexAction',  '_route' => 'prof',);
            }

            // prof_show
            if (preg_match('#^/prof/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\ProfController::showAction',)), array('_route' => 'prof_show'));
            }

            // prof_new
            if ($pathinfo === '/prof/new') {
                return array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\ProfController::newAction',  '_route' => 'prof_new',);
            }

            // prof_create
            if ($pathinfo === '/prof/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_prof_create;
                }

                return array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\ProfController::createAction',  '_route' => 'prof_create',);
            }
            not_prof_create:

            // prof_edit
            if (preg_match('#^/prof/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\ProfController::editAction',)), array('_route' => 'prof_edit'));
            }

            // prof_update
            if (preg_match('#^/prof/(?P<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_prof_update;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\ProfController::updateAction',)), array('_route' => 'prof_update'));
            }
            not_prof_update:

            // prof_delete
            if (preg_match('#^/prof/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_prof_delete;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\ProfController::deleteAction',)), array('_route' => 'prof_delete'));
            }
            not_prof_delete:

        }

        if (0 === strpos($pathinfo, '/salle')) {
            // salle
            if (rtrim($pathinfo, '/') === '/salle') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'salle');
                }

                return array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\SalleController::indexAction',  '_route' => 'salle',);
            }

            // salle_show
            if (preg_match('#^/salle/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\SalleController::showAction',)), array('_route' => 'salle_show'));
            }

            // salle_new
            if ($pathinfo === '/salle/new') {
                return array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\SalleController::newAction',  '_route' => 'salle_new',);
            }

            // salle_create
            if ($pathinfo === '/salle/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_salle_create;
                }

                return array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\SalleController::createAction',  '_route' => 'salle_create',);
            }
            not_salle_create:

            // salle_edit
            if (preg_match('#^/salle/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\SalleController::editAction',)), array('_route' => 'salle_edit'));
            }

            // salle_update
            if (preg_match('#^/salle/(?P<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_salle_update;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\SalleController::updateAction',)), array('_route' => 'salle_update'));
            }
            not_salle_update:

            // salle_delete
            if (preg_match('#^/salle/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_salle_delete;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\SalleController::deleteAction',)), array('_route' => 'salle_delete'));
            }
            not_salle_delete:

        }

        if (0 === strpos($pathinfo, '/mailing')) {
            // mailing
            if (rtrim($pathinfo, '/') === '/mailing') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'mailing');
                }

                return array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\MailingController::indexAction',  '_route' => 'mailing',);
            }

            // mailing_create
            if ($pathinfo === '/mailing/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_mailing_create;
                }

                return array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\MailingController::createAction',  '_route' => 'mailing_create',);
            }
            not_mailing_create:

            // mailing_search
            if ($pathinfo === '/mailing/search') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_mailing_search;
                }

                return array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\MailingController::searchAction',  '_route' => 'mailing_search',);
            }
            not_mailing_search:

            // mailing_index
            if ($pathinfo === '/mailing/index') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_mailing_index;
                }

                return array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\MailingController::indexAction',  '_route' => 'mailing_index',);
            }
            not_mailing_index:

            // mailing_delete
            if (0 === strpos($pathinfo, '/mailing/delete') && preg_match('#^/mailing/delete/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_mailing_delete;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\MailingController::deleteAction',)), array('_route' => 'mailing_delete'));
            }
            not_mailing_delete:

        }

        // login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'EcoleDeMusique\\WelcomeBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
        }

        // login_check
        if ($pathinfo === '/login_check') {
            return array('_route' => 'login_check');
        }

        // logout
        if ($pathinfo === '/logout') {
            return array('_route' => 'logout');
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
