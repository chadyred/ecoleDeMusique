<?php

namespace EcoleDeMusique\WelcomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Salle
 *
 * @ORM\Table(name="salle")
 * @ORM\Entity
 */
class Salle
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
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     * 
     * ON RECUPERE DES COURS ET NON DES SALLES
     * 
     * @ORM\OneToMany(targetEntity="EcoleDeMusique\WelcomeBundle\Entity\Cours", mappedBy="salle", cascade={"persist"})
     *
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
     *
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
     * @param EcoleDeMusique\WelcomeBundle\Entity\Salle $salle
     */
    public function removeSalle(\EcoleDeMusique\WelcomeBundle\Entity\Salle $salle)
    {
        $this->salles->removeElement($salle);
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
