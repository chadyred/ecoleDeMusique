<?php

namespace EcoleDeMusique\WelcomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EcoleDeMusique\WelcomeBundle\Entity\Salle
 */
class Salle
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $nom
     */
    private $nom;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $salles;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->salles = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set nom
     *
     * @param string $nom
     * @return Salle
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    
        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Add salles
     *
     * @param EcoleDeMusique\WelcomeBundle\Entity\Salle $salles
     * @return Salle
     */
    public function addSalle(\EcoleDeMusique\WelcomeBundle\Entity\Salle $salles)
    {
        $this->salles[] = $salles;
    
        return $this;
    }

    /**
     * Remove salles
     *
     * @param EcoleDeMusique\WelcomeBundle\Entity\Salle $salles
     */
    public function removeSalle(\EcoleDeMusique\WelcomeBundle\Entity\Salle $salles)
    {
        $this->salles->removeElement($salles);
    }

    /**
     * Get salles
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getSalles()
    {
        return $this->salles;
    }
    
    
      public function __toString() 
    {
            return "".$this->getNom();
    }
}