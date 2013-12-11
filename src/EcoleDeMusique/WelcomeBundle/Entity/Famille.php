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
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $familles;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->familles = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @param EcoleDeMusique\WelcomeBundle\Entity\Eleve $familles
     * @return Famille
     */
    public function addFamille(\EcoleDeMusique\WelcomeBundle\Entity\Eleve $familles)
    {
        $this->familles[] = $familles;
    
        return $this;
    }

    /**
     * Remove familles
     *
     * @param EcoleDeMusique\WelcomeBundle\Entity\Eleve $familles
     */
    public function removeFamille(\EcoleDeMusique\WelcomeBundle\Entity\Eleve $familles)
    {
        $this->familles->removeElement($familles);
    }

    /**
     * Get familles
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getFamilles()
    {
        return $this->familles;
    }
    
    
          public function __toString() 
    {
            return "".$this->getId();
    }
    
    
}