<?php

namespace EcoleDeMusique\WelcomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EcoleDeMusique\WelcomeBundle\Entity\Activite
 */
class Activite
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $categorie
     */
    private $categorie;

    /**
     * @var string $nom
     */
    private $nom;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $activites;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->activites = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set categorie
     *
     * @param string $categorie
     * @return Activite
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;
    
        return $this;
    }

    /**
     * Get categorie
     *
     * @return string 
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Activite
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
     * Add activites
     *
     * @param EcoleDeMusique\WelcomeBundle\Entity\ActiviteEleve $activites
     * @return Activite
     */
    public function addActivite(\EcoleDeMusique\WelcomeBundle\Entity\ActiviteEleve $activites)
    {
        $this->activites[] = $activites;
    
        return $this;
    }

    /**
     * Remove activites
     *
     * @param EcoleDeMusique\WelcomeBundle\Entity\ActiviteEleve $activites
     */
    public function removeActivite(\EcoleDeMusique\WelcomeBundle\Entity\ActiviteEleve $activites)
    {
        $this->activites->removeElement($activites);
    }

    /**
     * Get activites
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getActivites()
    {
        return $this->activites;
    }
    
    
            public function __toString() 
    {
            return "".$this->getNom();
    }
}