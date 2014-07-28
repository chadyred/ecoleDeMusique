<?php

namespace EcoleDeMusique\WelcomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table()
 * EcoleDeMusique\WelcomeBundle\Entity\Paiement
 */
class Paiement
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var boolean $interupt
     */
    private $interupt;

    /**
     * @var \DateTime $dateInterupt
     */
    private $dateInterupt;

    /**
     * @var integer $sommePeriode
     */
    private $sommePeriode;
    
    /**
     * @ORM\OneToMany(targetEntity="EcoleDeMusique\WelcomeBundle\Entity\PaiementPeriode", mappedBy="paiement", cascade={"persist"})
     */
    private $paiementPeriode;

    
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
     * Set interupt
     *
     * @param boolean $interupt
     * @return Paiement
     */
    public function setInterupt($interupt)
    {
        $this->interupt = $interupt;
    
        return $this;
    }

    /**
     * Get interupt
     *
     * @return boolean 
     */
    public function getInterupt()
    {
        return $this->interupt;
    }

    /**
     * Set dateInterupt
     *
     * @param \DateTime $dateInterupt
     * @return Paiement
     */
    public function setDateInterupt($dateInterupt)
    {
        $this->dateInterupt = $dateInterupt;
    
        return $this;
    }

    /**
     * Get dateInterupt
     *
     * @return \DateTime 
     */
    public function getDateInterupt()
    {
        return $this->dateInterupt;
    }

    /**
     * Set sommePeriode
     *
     * @param integer $sommePeriode
     * @return Paiement
     */
    public function setSommePeriode($sommePeriode)
    {
        $this->sommePeriode = $sommePeriode;
    
        return $this;
    }

    /**
     * Get sommePeriode
     *
     * @return integer 
     */
    public function getSommePeriode()
    {
        return $this->sommePeriode;
    }
    /**
     * @ORM\ManyToOne(targetEntity="EcoleDeMusique\WelcomeBundle\Entity\Eleve", inversedBy="paiement", cascade={"persist"})
     */
    private $eleve;

    /**
     * @var float $sommeTotal
     */
    private $sommeTotal;


    /**
     * Set sommeTotal
     *
     * @param float $sommeTotal
     * @return Paiement
     */
    public function setSommeTotal($sommeTotal)
    {
        $this->sommeTotal = $sommeTotal;
    
        return $this;
    }

    /**
     * Get sommeTotal
     *
     * @return float 
     */
    public function getSommeTotal()
    {
        return $this->sommeTotal;
    }

    /**
     * Set eleve
     *
     * @param EcoleDeMusique\WelcomeBundle\Entity\Eleve $eleve
     * @return Paiement
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

}