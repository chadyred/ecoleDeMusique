<?php

namespace EcoleDeMusique\WelcomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Activiteeleve
 *
 * @ORM\Table(name="ActiviteEleve", indexes={@ORM\Index(name="IDX_B4EB086F9B0F88B1", columns={"activite_id"}), @ORM\Index(name="IDX_B4EB086FA6CC7B2", columns={"eleve_id"})})
 * @ORM\Entity
 */
class ActiviteEleve
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
     * @ORM\Column(name="type", type="string", length=255, nullable=false)
     */
    private $type;

    /**
     * @var \Activite
     *
     * @ORM\ManyToOne(targetEntity="Activite")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="activite_id", referencedColumnName="id")
     * })
     */
    private $activite;

    /**
     * @var \Eleve
     *
     * @ORM\ManyToOne(targetEntity="Eleve")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="eleve_id", referencedColumnName="id")
     * })
     */
    private $eleve;

    /**	
     * @ORM\ManyToMany(targetEntity="EcoleDeMusique\WelcomeBundle\Entity\Mailing", mappedBy="activiteEleves", cascade={"persist"})	
     */	
    private $mailings;

    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->mailings = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set type
     *
     * @param string $type
     *
     * @return Activiteeleve
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
     * Set activite
     *
     * @param \EcoleDeMusique\WelcomeBundle\Entity\Activite $activite
     *
     * @return Activiteeleve
     */
    public function setActivite(\EcoleDeMusique\WelcomeBundle\Entity\Activite $activite = null)
    {
        $this->activite = $activite;

        return $this;
    }

    /**
     * Get activite
     *
     * @return \EcoleDeMusique\WelcomeBundle\Entity\Activite
     */
    public function getActivite()
    {
        return $this->activite;
    }

    /**
     * Set eleve
     *
     * @param \EcoleDeMusique\WelcomeBundle\Entity\Eleve $eleve
     *
     * @return Activiteeleve
     */
    public function setEleve(\EcoleDeMusique\WelcomeBundle\Entity\Eleve $eleve = null)
    {
        $this->eleve = $eleve;

        return $this;
    }

    /**
     * Get eleve
     *
     * @return \EcoleDeMusique\WelcomeBundle\Entity\Eleve
     */
    public function getEleve()
    {
        return $this->eleve;
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
 
    
}
