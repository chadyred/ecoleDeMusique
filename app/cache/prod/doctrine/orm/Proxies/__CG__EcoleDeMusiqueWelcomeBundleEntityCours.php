<?php

namespace Proxies\__CG__\EcoleDeMusique\WelcomeBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Cours extends \EcoleDeMusique\WelcomeBundle\Entity\Cours implements \Doctrine\ORM\Proxy\Proxy
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

    public function setDate($date)
    {
        $this->__load();
        return parent::setDate($date);
    }

    public function getDate()
    {
        $this->__load();
        return parent::getDate();
    }

    public function addCours(\EcoleDeMusique\WelcomeBundle\Entity\CoursEleve $courss)
    {
        $this->__load();
        return parent::addCours($courss);
    }

    public function removeCours(\EcoleDeMusique\WelcomeBundle\Entity\CoursEleve $courss)
    {
        $this->__load();
        return parent::removeCours($courss);
    }

    public function getCourss()
    {
        $this->__load();
        return parent::getCourss();
    }

    public function setProf(\EcoleDeMusique\WelcomeBundle\Entity\Prof $prof = NULL)
    {
        $this->__load();
        return parent::setProf($prof);
    }

    public function getProf()
    {
        $this->__load();
        return parent::getProf();
    }

    public function setSalle(\EcoleDeMusique\WelcomeBundle\Entity\Salle $salle = NULL)
    {
        $this->__load();
        return parent::setSalle($salle);
    }

    public function getSalle()
    {
        $this->__load();
        return parent::getSalle();
    }

    public function setDateDeb($dateDeb)
    {
        $this->__load();
        return parent::setDateDeb($dateDeb);
    }

    public function getDateDeb()
    {
        $this->__load();
        return parent::getDateDeb();
    }

    public function setDateFin($dateFin)
    {
        $this->__load();
        return parent::setDateFin($dateFin);
    }

    public function getDateFin()
    {
        $this->__load();
        return parent::getDateFin();
    }

    public function setActivite(\EcoleDeMusique\WelcomeBundle\Entity\Activite $activite = NULL)
    {
        $this->__load();
        return parent::setActivite($activite);
    }

    public function getActivite()
    {
        $this->__load();
        return parent::getActivite();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'dateDeb', 'dateFin', 'courss', 'prof', 'salle', 'activite');
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