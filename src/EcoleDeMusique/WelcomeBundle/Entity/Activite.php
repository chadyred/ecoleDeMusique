<?php

namespace EcoleDeMusique\WelcomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Activite
 *
 * @ORM\Table(name="Activite")
 * @ORM\Entity
 */
class Activite
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="categorie", type="string", length=255, nullable=false)
     */
    private $categorie;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     *  @ORM\OneToMany(targetEntity="EcoleDeMusique\WelcomeBundle\Entity\Cours", mappedBy="activite")
     * 
     * Ce sont des cours xD
     * 
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
     *
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
     *
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
