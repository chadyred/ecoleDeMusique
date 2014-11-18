<?php

namespace EcoleDeMusique\WelcomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Famille
 *
 * @ORM\Table(name="famille", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_2473F21353C59D72", columns={"responsable_id"})})
 * @ORM\Entity
 */
class Famille
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
     * @var integer
     *
     * @ORM\Column(name="qf", type="integer", nullable=true)
     */
    private $qf;

    /**
     * @var \Eleve
     *
     * @ORM\OneToOne(targetEntity="Eleve")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="responsable_id", referencedColumnName="id")
     * })
     */
    private $responsable;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     * @ORM\OneToMany(targetEntity="EcoleDeMusique\WelcomeBundle\Entity\Eleve", mappedBy="famille")
     */
    private $eleves;
    
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->eleves = new \Doctrine\Common\Collections\ArrayCollection();
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
     *
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
     * Set responsable
     *
     * @param \EcoleDeMusique\WelcomeBundle\Entity\Eleve $responsable
     *
     * @return Famille
     */
    public function setResponsable(\EcoleDeMusique\WelcomeBundle\Entity\Eleve $responsable = null)
    {
        $this->responsable = $responsable;

        return $this;
    }

    /**
     * Get responsable
     *
     * @return \EcoleDeMusique\WelcomeBundle\Entity\Eleve
     */
    public function getResponsable()
    {
        return $this->responsable;
    }
    
     /**
     * Add eleve
     *
     * @param EcoleDeMusique\WelcomeBundle\Entity\Eleve $eleve
     * @return Famille
     */
    public function addEleve(\EcoleDeMusique\WelcomeBundle\Entity\Eleve $eleve)
    {
        $this->eleves[] = $eleve;
    
        return $this;
    }
    /**
     * Remove familles
     *
     * @param EcoleDeMusique\WelcomeBundle\Entity\Eleve $eleve
     */
    public function removeEleve(\EcoleDeMusique\WelcomeBundle\Entity\Eleve $eleve)
    {
        $this->eleves->removeElement($eleve);
    }
    /**
     * Get familles
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getEleves()
    {
        return $this->eleves;
    }
    
    
    public function __toString() 
    {
        return "" . $this->getId();
    }       
}
