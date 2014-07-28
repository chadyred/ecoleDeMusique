<?php

namespace EcoleDeMusique\WelcomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EcoleDeMusique\WelcomeBundle\Entity\ActiviteEleve
 */
class ActiviteEleve
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $type
     */
    private $type;

    /**
     * @var EcoleDeMusique\WelcomeBundle\Entity\Eleve
     */
    private $eleve;
    
    /**
     * @var EcoleDeMusique\WelcomeBundle\Entity\Activite
     */
    private $activite;
    
     /**
     * @ORM\ManyToMany(targetEntity="EcoleDeMusique\WelcomeBundle\Entity\Mailing", mappedBy="activiteEleves", cascade={"persist"})
     */
    private $mailings;

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
     * Set type
     *
     * @param string $type
     * @return ActiviteEleve
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set eleve
     *
     * @param EcoleDeMusique\WelcomeBundle\Entity\Eleve $eleve
     * @return ActiviteEleve
     */
    public function setEleve(\EcoleDeMusique\WelcomeBundle\Entity\Eleve $eleve = null)
    {
        $this->eleve = $eleve;
    
        return $this;
    }

    /**
     * Get eleve
     *
     * @return EcoleDeMusique\WelcomeBundle\Entity\Eleve 
     */
    public function getEleve()
    {
        return $this->eleve;
    }



    /**
     * Set activite
     *
     * @param EcoleDeMusique\WelcomeBundle\Entity\Activite $activite
     * @return ActiviteEleve
     */
    public function setActivite(\EcoleDeMusique\WelcomeBundle\Entity\Activite $activite = null)
    {
        $this->activite = $activite;
    
        return $this;
    }

    /**
     * Get activite
     *
     * @return EcoleDeMusique\WelcomeBundle\Entity\Activite 
     */
    public function getActivite()
    {
        return $this->activite;
    }
    
    
     /**
     * Add mailings
     *
     * @param EcoleDeMusique\WelcomeBundle\Entity\ActiviteEleve $mailings
     * @return Mailing
     */
    public function addMailing(\EcoleDeMusique\WelcomeBundle\Entity\ActiviteEleve $mailings)
    {
        $this->mailings[] = $mailings;
    
        return $this;
    }

    /**
     * Remove mailings
     *
     * @param EcoleDeMusique\WelcomeBundle\Entity\ActiviteEleve $mailings
     */
    public function removeMailing(\EcoleDeMusique\WelcomeBundle\Entity\ActiviteEleve $mailings)
    {
        $this->mailings->removeElement($mailings);
    }

    /**
     * Get mailings
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getMailing()
    {
        return $this->mailings;
    }
    
       public function getLabel()
    {
        return $this->eleve->getNom().', '. $this->eleve->getPrenom() .' ('. $this->eleve->getMail() .')';
    }
      
       public function getNomActivite()
    {
        return $this->activite->getNom();
    } 
 
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->mailings = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
}