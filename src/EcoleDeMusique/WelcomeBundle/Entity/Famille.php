<?php

namespace EcoleDeMusique\WelcomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EcoleDeMusique\WelcomeBundle\Entity\Famille
 */
class Famille
{
    
 
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var integer $qf
     */
    private $qf;
    
    /**
     * @var integer $qf
     */
    private $nom;    
    
    /**
     * @var Eleve
     */
    private $responsable;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $eleves;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->eleves = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set qf
     *
     * @param integer $qf
     * @return Famille
     */
    public function setQf($qf)
    {
        $this->qf = $qf;
    
        return $this;
    }

    /**
     * Get qf
     *
     * @return integer 
     */
    public function getQf()
    {
        return $this->qf;
    }

    /**
     * Add familles
     *
     * @param EcoleDeMusique\WelcomeBundle\Entity\Eleve $eleve
     * @return Famille
     */
    public function addEleve(\EcoleDeMusique\WelcomeBundle\Entity\Eleve $eleve)
    {
        $this->eleves[] = $eleve;
    
        return $this;
    }

    /**
     * Remove familles
     *
     * @param EcoleDeMusique\WelcomeBundle\Entity\Eleve $eleve
     */
    public function removeEleve(\EcoleDeMusique\WelcomeBundle\Entity\Eleve $eleve)
    {
        $this->eleves->removeElement($eleve);
    }

    /**
     * Get familles
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getEleves()
    {
        return $this->eleves;
    }
    
    
          public function __toString() 
    {
            return "".$this->getId();
    }       

    

    /**
     * Set responsable
     *
     * @param \EcoleDeMusique\WelcomeBundle\Entity\Eleve $responsable
     *
     * @return Famille
     */
    public function setResponsable(\EcoleDeMusique\WelcomeBundle\Entity\Eleve $responsable = null)
    {
        $this->responsable = $responsable;

        return $this;
    }

    /**
     * Get responsable
     *
     * @return \EcoleDeMusique\WelcomeBundle\Entity\Eleve
     */
    public function getResponsable()
    {
        return $this->responsable;
    }

}
