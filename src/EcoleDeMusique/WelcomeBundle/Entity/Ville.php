<?php

namespace EcoleDeMusique\WelcomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ville
 *
 * @ORM\Table(name="ville")
 * @ORM\Entity
 */
class Ville
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
     *
     * @ORM\Column(name="ville_departement", type="string", length=3)
     * 
     * @var type string
     */
    private $villeDepartement;
    
    /**
     *
     * @ORM\Column(name="ville_slug", type="string", length=255)
     * 
     * @var type string
     */
    private $villeSlug;
    
    /**
     *
     * @ORM\Column(name="ville_nom", type="string", length=45)
     * 
     * @var type string
     */
    private $villeNom;
    
    /**
     *
     * @ORM\Column(name="ville_nom_simple", type="string", length=45)
     * 
     * @var type string
     */
    private $villeNomSimple;
    
    /**
     *
     * @ORM\Column(name="ville_nom_reel", type="string", length=45)
     * 
     * @var type string
     */
    private $villeNomReel;
    
    /**
     *
     * @ORM\Column(name="ville_code_postal", type="string", length=255)
     * 
     * @var type string
     */
    private $villeCp;
    
    /**
     * Doctrine Array
     * 
     * Une ville contient plusieurs coordonnee. On persiste l'ajout de coordonnées à une ville (DRY)
     * 
     * @ORM\OneToMany(targetEntity="EcoleDeMusique\WelcomeBundle\Entity\Coordonnee", mappedBy="ville", cascade={"persist"})
     * 
     * @var type 
     */
    private $coordonnees;
    
    
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->coordonnees = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Get villeDepartement
     *
     * @return string
     */
    public function getVilleDepartement()
    {
        return $this->villeDepartement;
    }


    /**
     * Get villeSlug
     *
     * @return string
     */
    public function getVilleSlug()
    {
        return $this->villeSlug;
    }


    /**
     * Get villeNom
     *
     * @return string
     */
    public function getVilleNom()
    {
        return $this->villeNom;
    }


    /**
     * Get villeNomSimple
     *
     * @return string
     */
    public function getVilleNomSimple()
    {
        return $this->villeNomSimple;
    }


    /**
     * Get villeNomReel
     *
     * @return string
     */
    public function getVilleNomReel()
    {
        return $this->villeNomReel;
    }


    /**
     * Get villeCp
     *
     * @return string
     */
    public function getVilleCp()
    {
        return $this->villeCp;
    }

    /**
     * Set villeDepartement
     *
     * @param string $villeDepartement
     *
     * @return Ville
     */
    public function setVilleDepartement($villeDepartement)
    {
        $this->villeDepartement = $villeDepartement;

        return $this;
    }

    /**
     * Set villeSlug
     *
     * @param string $villeSlug
     *
     * @return Ville
     */
    public function setVilleSlug($villeSlug)
    {
        $this->villeSlug = $villeSlug;

        return $this;
    }

    /**
     * Set villeNom
     *
     * @param string $villeNom
     *
     * @return Ville
     */
    public function setVilleNom($villeNom)
    {
        $this->villeNom = $villeNom;

        return $this;
    }

    /**
     * Set villeNomSimple
     *
     * @param string $villeNomSimple
     *
     * @return Ville
     */
    public function setVilleNomSimple($villeNomSimple)
    {
        $this->villeNomSimple = $villeNomSimple;

        return $this;
    }

    /**
     * Set villeNomReel
     *
     * @param string $villeNomReel
     *
     * @return Ville
     */
    public function setVilleNomReel($villeNomReel)
    {
        $this->villeNomReel = $villeNomReel;

        return $this;
    }

    /**
     * Set villeCp
     *
     * @param string $villeCp
     *
     * @return Ville
     */
    public function setVilleCp($villeCp)
    {
        $this->villeCp = $villeCp;

        return $this;
    }

    /**
     * Add coordonnee
     *
     * @param \EcoleDeMusique\WelcomeBundle\Entity\Coordonnee $coordonnee
     *
     * @return Ville
     */
    public function addCoordonnee(\EcoleDeMusique\WelcomeBundle\Entity\Coordonnee $coordonnee)
    {
        $this->coordonnees[] = $coordonnee;

        return $this;
    }

    /**
     * Remove coordonnee
     *
     * @param \EcoleDeMusique\WelcomeBundle\Entity\Coordonnee $coordonnee
     */
    public function removeCoordonnee(\EcoleDeMusique\WelcomeBundle\Entity\Coordonnee $coordonnee)
    {
        $this->coordonnees->removeElement($coordonnee);
    }

    /**
     * Get coordonnees
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCoordonnees()
    {
        return $this->coordonnees;
    }
}
