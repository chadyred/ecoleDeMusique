<?php

namespace Proxies\__CG__\EcoleDeMusique\WelcomeBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Eleve extends \EcoleDeMusique\WelcomeBundle\Entity\Eleve implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setNom($nom)
    {
        $this->__load();
        return parent::setNom($nom);
    }

    public function getNom()
    {
        $this->__load();
        return parent::getNom();
    }

    public function setPrenom($prenom)
    {
        $this->__load();
        return parent::setPrenom($prenom);
    }

    public function getPrenom()
    {
        $this->__load();
        return parent::getPrenom();
    }

    public function setAdresse($adresse)
    {
        $this->__load();
        return parent::setAdresse($adresse);
    }

    public function getAdresse()
    {
        $this->__load();
        return parent::getAdresse();
    }

    public function setCodePostal($codePostal)
    {
        $this->__load();
        return parent::setCodePostal($codePostal);
    }

    public function getCodePostal()
    {
        $this->__load();
        return parent::getCodePostal();
    }

    public function setCivilite($civilite)
    {
        $this->__load();
        return parent::setCivilite($civilite);
    }

    public function getCivilite()
    {
        $this->__load();
        return parent::getCivilite();
    }

    public function setTelEleve($telEleve)
    {
        $this->__load();
        return parent::setTelEleve($telEleve);
    }

    public function getTelEleve()
    {
        $this->__load();
        return parent::getTelEleve();
    }

    public function setTelMere($telMere)
    {
        $this->__load();
        return parent::setTelMere($telMere);
    }

    public function getTelMere()
    {
        $this->__load();
        return parent::getTelMere();
    }

    public function setTelPere($telPere)
    {
        $this->__load();
        return parent::setTelPere($telPere);
    }

    public function getTelPere()
    {
        $this->__load();
        return parent::getTelPere();
    }

    public function setDateDeNaissance($dateDeNaissance)
    {
        $this->__load();
        return parent::setDateDeNaissance($dateDeNaissance);
    }

    public function getDateDeNaissance()
    {
        $this->__load();
        return parent::getDateDeNaissance();
    }

    public function setMail($mail)
    {
        $this->__load();
        return parent::setMail($mail);
    }

    public function getMail()
    {
        $this->__load();
        return parent::getMail();
    }

    public function setRegie(\EcoleDeMusique\WelcomeBundle\Entity\Regie $regie = NULL)
    {
        $this->__load();
        return parent::setRegie($regie);
    }

    public function getRegie()
    {
        $this->__load();
        return parent::getRegie();
    }

    public function setFamille(\EcoleDeMusique\WelcomeBundle\Entity\Famille $famille = NULL)
    {
        $this->__load();
        return parent::setFamille($famille);
    }

    public function getFamille()
    {
        $this->__load();
        return parent::getFamille();
    }

    public function __toString()
    {
        $this->__load();
        return parent::__toString();
    }

    public function setPaiement(\EcoleDeMusique\WelcomeBundle\Entity\Paiement $paiement = NULL)
    {
        $this->__load();
        return parent::setPaiement($paiement);
    }

    public function getPaiement()
    {
        $this->__load();
        return parent::getPaiement();
    }

    public function addEleve(\EcoleDeMusique\WelcomeBundle\Entity\Paiement $eleves)
    {
        $this->__load();
        return parent::addEleve($eleves);
    }

    public function removeEleve(\EcoleDeMusique\WelcomeBundle\Entity\Paiement $eleves)
    {
        $this->__load();
        return parent::removeEleve($eleves);
    }

    public function getEleves()
    {
        $this->__load();
        return parent::getEleves();
    }

    public function setVille($ville)
    {
        $this->__load();
        return parent::setVille($ville);
    }

    public function getVille()
    {
        $this->__load();
        return parent::getVille();
    }

    public function addActivite(\EcoleDeMusique\WelcomeBundle\Entity\ActiviteEleve $activites)
    {
        $this->__load();
        return parent::addActivite($activites);
    }

    public function removeActivite(\EcoleDeMusique\WelcomeBundle\Entity\ActiviteEleve $activites)
    {
        $this->__load();
        return parent::removeActivite($activites);
    }

    public function getActivites()
    {
        $this->__load();
        return parent::getActivites();
    }

    public function findremisebyeleve()
    {
        $this->__load();
        return parent::findremisebyeleve();
    }

    public function findSommeAvecRemise()
    {
        $this->__load();
        return parent::findSommeAvecRemise();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'nom', 'prenom', 'adresse', 'codePostal', 'ville', 'civilite', 'telEleve', 'telMere', 'telPere', 'dateDeNaissance', 'mail', 'regie', 'eleves', 'famille');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}