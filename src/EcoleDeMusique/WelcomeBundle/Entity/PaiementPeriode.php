<?php

namespace EcoleDeMusique\WelcomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table()
 * EcoleDeMusique\WelcomeBundle\Entity\PaiementPeriode
 */
class PaiementPeriode
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var integer $numeraire
     */
    private $numeraire;

    /**
     * @var integer $chequeJeune
     */
    private $chequeJeune;

    /**
     * @var integer $chequeVacance
     */
    private $chequeVacance;

    /**
     * @var integer $cheque
     */
    private $cheque;
    

    
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
     * Set numeraire
     *
     * @param integer $numeraire
     * @return PaiementPeriode
     */
    public function setNumeraire($numeraire)
    {
        $this->numeraire = $numeraire;
    
        return $this;
    }

    /**
     * Get numeraire
     *
     * @return integer 
     */
    public function getNumeraire()
    {
        return $this->numeraire;
    }

    /**
     * Set chequeJeune
     *
     * @param integer $chequeJeune
     * @return PaiementPeriode
     */
    public function setChequeJeune($chequeJeune)
    {
        $this->chequeJeune = $chequeJeune;
    
        return $this;
    }

    /**
     * Get chequeJeune
     *
     * @return integer 
     */
    public function getChequeJeune()
    {
        return $this->chequeJeune;
    }

    /**
     * Set chequeVacance
     *
     * @param integer $chequeVacance
     * @return PaiementPeriode
     */
    public function setChequeVacance($chequeVacance)
    {
        $this->chequeVacance = $chequeVacance;
    
        return $this;
    }

    /**
     * Get chequeVacance
     *
     * @return integer 
     */
    public function getChequeVacance()
    {
        return $this->chequeVacance;
    }

    /**
     * Set cheque
     *
     * @param integer $cheque
     * @return PaiementPeriode
     */
    public function setCheque($cheque)
    {
        $this->cheque = $cheque;
    
        return $this;
    }

    /**
     * Get cheque
     *
     * @return integer 
     */
    public function getCheque()
    {
        return $this->cheque;
    }
    /**
     * @var integer $numPeriod
     */
    private $numPeriod;

    /**
     * @ORM\ManyToOne(targetEntity="EcoleDeMusique\WelcomeBundle\Entity\Paiement", inversedBy="paiementPeriode", cascade={"persist"})
     */
    private $paiement;


    /**
     * Set numPeriod
     *
     * @param integer $numPeriod
     * @return PaiementPeriode
     */
    public function setNumPeriod($numPeriod)
    {
        $this->numPeriod = $numPeriod;
    
        return $this;
    }

    /**
     * Get numPeriod
     *
     * @return integer 
     */
    public function getNumPeriod()
    {
        return $this->numPeriod;
    }

    /**
     * Set paiement
     *
     * @param EcoleDeMusique\WelcomeBundle\Entity\Paiement $paiement
     * @return PaiementPeriode
     */
    public function setPaiement(\EcoleDeMusique\WelcomeBundle\Entity\Paiement $paiement = null)
    {
        $this->paiement = $paiement;
    
        return $this;
    }

    /**
     * Get paiement
     *
     * @return EcoleDeMusique\WelcomeBundle\Entity\Paiement 
     */
    public function getPaiement()
    {
        return $this->paiement;
    }
    /**
     * @var float $cb
     */
    private $cb;

    /**
     * @var float $prelev
     */
    private $prelev;


    /**
     * Set cb
     *
     * @param float $cb
     * @return PaiementPeriode
     */
    public function setCb($cb)
    {
        $this->cb = $cb;
    
        return $this;
    }

    /**
     * Get cb
     *
     * @return float 
     */
    public function getCb()
    {
        return $this->cb;
    }

    /**
     * Set prelev
     *
     * @param float $prelev
     * @return PaiementPeriode
     */
    public function setPrelev($prelev)
    {
        $this->prelev = $prelev;
    
        return $this;
    }

    /**
     * Get prelev
     *
     * @return float 
     */
    public function getPrelev()
    {
        return $this->prelev;
    }
    /**
     * @var \DateTime $dateNumeraire
     */
    private $dateNumeraire;

    /**
     * @var \DateTime $dateChequeJeune
     */
    private $dateChequeJeune;

    /**
     * @var \DateTime $dateChequeVacance
     */
    private $dateChequeVacance;

    /**
     * @var \DateTime $dateCheque
     */
    private $dateCheque;

    /**
     * @var \DateTime $dateCb
     */
    private $dateCb;

    /**
     * @var \DateTime $datePrelev
     */
    private $datePrelev;


    /**
     * Set dateNumeraire
     *
     * @param \DateTime $dateNumeraire
     * @return PaiementPeriode
     */
    public function setDateNumeraire($dateNumeraire)
    {
        $this->dateNumeraire = $dateNumeraire;
    
        return $this;
    }

    /**
     * Get dateNumeraire
     *
     * @return \DateTime 
     */
    public function getDateNumeraire()
    {
        return $this->dateNumeraire;
    }

    /**
     * Set dateChequeJeune
     *
     * @param \DateTime $dateChequeJeune
     * @return PaiementPeriode
     */
    public function setDateChequeJeune($dateChequeJeune)
    {
        $this->dateChequeJeune = $dateChequeJeune;
    
        return $this;
    }

    /**
     * Get dateChequeJeune
     *
     * @return \DateTime 
     */
    public function getDateChequeJeune()
    {
        return $this->dateChequeJeune;
    }

    /**
     * Set dateChequeVacance
     *
     * @param \DateTime $dateChequeVacance
     * @return PaiementPeriode
     */
    public function setDateChequeVacance($dateChequeVacance)
    {
        $this->dateChequeVacance = $dateChequeVacance;
    
        return $this;
    }

    /**
     * Get dateChequeVacance
     *
     * @return \DateTime 
     */
    public function getDateChequeVacance()
    {
        return $this->dateChequeVacance;
    }

    /**
     * Set dateCheque
     *
     * @param \DateTime $dateCheque
     * @return PaiementPeriode
     */
    public function setDateCheque($dateCheque)
    {
        $this->dateCheque = $dateCheque;
    
        return $this;
    }

    /**
     * Get dateCheque
     *
     * @return \DateTime 
     */
    public function getDateCheque()
    {
        return $this->dateCheque;
    }

    /**
     * Set dateCb
     *
     * @param \DateTime $dateCb
     * @return PaiementPeriode
     */
    public function setDateCb($dateCb)
    {
        $this->dateCb = $dateCb;
    
        return $this;
    }

    /**
     * Get dateCb
     *
     * @return \DateTime 
     */
    public function getDateCb()
    {
        return $this->dateCb;
    }

    /**
     * Set datePrelev
     *
     * @param \DateTime $datePrelev
     * @return PaiementPeriode
     */
    public function setDatePrelev($datePrelev)
    {
        $this->datePrelev = $datePrelev;
    
        return $this;
    }

    /**
     * Get datePrelev
     *
     * @return \DateTime 
     */
    public function getDatePrelev()
    {
        return $this->datePrelev;
    }
}