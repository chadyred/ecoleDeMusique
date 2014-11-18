<?php

namespace EcoleDeMusique\WelcomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Civilite
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="EcoleDeMusique\WelcomeBundle\Entity\CiviliteRepository")
 */
class Civilite
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="abreviation", type="string", length=255)
     */
    private $abreviation;

    
    /**
     * doctrine array
     * 
     * On persiste un individu au sein d'une civilité
     * 
     * @ORM\OneToMany(targetEntity="EcoleDeMusique\WelcomeBundle\Entity\IndividuExterne", mappedBy="civilite", cascade={"persist"))
     * 
     */
    private $individusExterne;
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->individusExterne = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set titre
     *
     * @param string $titre
     *
     * @return Civilite
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set abreviation
     *
     * @param string $abreviation
     *
     * @return Civilite
     */
    public function setAbreviation($abreviation)
    {
        $this->abreviation = $abreviation;

        return $this;
    }

    /**
     * Get abreviation
     *
     * @return string
     */
    public function getAbreviation()
    {
        return $this->abreviation;
    }

    /**
     * Add individusExterne
     *
     * @param \EcoleDeMusique\WelcomeBundle\Entity\IndividuExterne $individusExterne
     *
     * @return Civilite
     */
    public function addIndividusExterne(\EcoleDeMusique\WelcomeBundle\Entity\IndividuExterne $individusExterne)
    {
        $this->individusExterne[] = $individusExterne;

        return $this;
    }

    /**
     * Remove individusExterne
     *
     * @param \EcoleDeMusique\WelcomeBundle\Entity\IndividuExterne $individusExterne
     */
    public function removeIndividusExterne(\EcoleDeMusique\WelcomeBundle\Entity\IndividuExterne $individusExterne)
    {
        $this->individusExterne->removeElement($individusExterne);
    }

    /**
     * Get individusExterne
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIndividusExterne()
    {
        return $this->individusExterne;
    }
}
