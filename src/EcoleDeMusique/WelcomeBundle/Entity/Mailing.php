<?php

namespace EcoleDeMusique\WelcomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Mailing
 *
 * @ORM\Table(name="mailing")
 * @ORM\Entity
 */
class Mailing
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
     * @ORM\Column(name="titre", type="string", length=50, nullable=false)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="string", length=500, nullable=true)
     */
    private $message;

    /**
     * @var string
     *
     * @ORM\Column(name="nomActivite", type="string", length=500, nullable=true)
     */
    private $nomActivite;
    
    /**
     * @ORM\ManyToMany(targetEntity="EcoleDeMusique\WelcomeBundle\Entity\ActiviteEleve",inversedBy="mailings", cascade={"persist"})
     */
    private $activiteEleves;  

/**
     * Constructor
     */
    public function __construct()
    {
        $this->activiteEleves = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Mailing
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
     * Set message
     *
     * @param string $message
     *
     * @return Mailing
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    
    /**
     * Get message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set nomactivite
     *
     * @param string $nomactivite
     *
     * @return Mailing
     */
    public function setNomActivite($nomActivite)
    {
        $this->nomActivite = $nomActivite;

        return $this;
    }

    /**
     * Get nomactivite
     *
     * @return string
     */
    public function getNomActivite()
    {
        return $this->nomActivite;
    }
    
    /**
     * Get activiteEleves
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getActiviteEleves()
    {
        return $this->activiteEleves;
    }
    
    /**
     * Add activiteEleves
     *
     * @param EcoleDeMusique\WelcomeBundle\Entity\Mailing $activiteEleves
     * @return activiteEleve
     */
    public function addActiviteEleves(\EcoleDeMusique\WelcomeBundle\Entity\Mailing $activiteEleves)
    {
        $this->activiteEleves[] = $activiteEleves;
    
        return $this;
    }

    /**
     * Remove activiteEleves
     *
     * @param EcoleDeMusique\WelcomeBundle\Entity\Mailing $activiteEleves
     */
    public function removeActiviteEleves(\EcoleDeMusique\WelcomeBundle\Entity\Mailing $activiteEleves)
    {
        $this->activiteEleves->removeElement($activiteEleves);
    }
 
}
