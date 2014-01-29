<?php

namespace Proxies\__CG__\EcoleDeMusique\WelcomeBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Archive extends \EcoleDeMusique\WelcomeBundle\Entity\Archive implements \Doctrine\ORM\Proxy\Proxy
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

    public function setCycle($cycle)
    {
        $this->__load();
        return parent::setCycle($cycle);
    }

    public function getCycle()
    {
        $this->__load();
        return parent::getCycle();
    }

    public function setInstru1($instru1)
    {
        $this->__load();
        return parent::setInstru1($instru1);
    }

    public function getInstru1()
    {
        $this->__load();
        return parent::getInstru1();
    }

    public function setInstru2($instru2)
    {
        $this->__load();
        return parent::setInstru2($instru2);
    }

    public function getInstru2()
    {
        $this->__load();
        return parent::getInstru2();
    }

    public function setAnneeActivite($anneeActivite)
    {
        $this->__load();
        return parent::setAnneeActivite($anneeActivite);
    }

    public function getAnneeActivite()
    {
        $this->__load();
        return parent::getAnneeActivite();
    }

    public function setInteruptionCourannee($interuptionCourannee)
    {
        $this->__load();
        return parent::setInteruptionCourannee($interuptionCourannee);
    }

    public function getInteruptionCourannee()
    {
        $this->__load();
        return parent::getInteruptionCourannee();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'nom', 'prenom', 'dateDeNaissance', 'cycle', 'instru1', 'instru2', 'anneeActivite', 'interuptionCourannee');
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