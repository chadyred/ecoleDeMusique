<?php

namespace EcoleDeMusique\WelcomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Paiementperiode
 *
 * @ORM\Table(name="paiementPeriode", indexes={@ORM\Index(name="IDX_28ED66FC2A4C4478", columns={"paiement_id"})})
 * @ORM\Entity
 */
class PaiementPeriode
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
     * @var float
     *
     * @ORM\Column(name="numPeriod", type="float", precision=10, scale=0, nullable=true)
     */
    private $numPeriod;

    /**
     * @var float
     *
     * @ORM\Column(name="numeraire", type="float", precision=10, scale=0, nullable=true)
     */
    private $numeraire;

    /**
     * @var float
     *
     * @ORM\Column(name="chequeJeune", type="float", precision=10, scale=0, nullable=true)
     */
    private $chequeJeune;

    /**
     * @var float
     *
     * @ORM\Column(name="chequeVacance", type="float", precision=10, scale=0, nullable=true)
     */
    private $chequeVacance;

    /**
     * @var float
     *
     * @ORM\Column(name="cheque", type="float", precision=10, scale=0, nullable=true)
     */
    private $cheque;

    /**
     * @var float
     *
     * @ORM\Column(name="cb", type="float", precision=10, scale=0, nullable=true)
     */
    private $cb;

    /**
     * @var float
     *
     * @ORM\Column(name="prelev", type="float", precision=10, scale=0, nullable=true)
     */
    private $prelev;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateNumeraire", type="date", nullable=true)
     */
    private $dateNumeraire;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateChequeJeune", type="date", nullable=true)
     */
    private $dateChequeJeune;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateChequeVacance", type="date", nullable=true)
     */
    private $dateChequeVacance;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCheque", type="date", nullable=true)
     */
    private $dateCheque;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCb", type="date", nullable=true)
     */
    private $dateCb;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datePrelev", type="date", nullable=true)
     */
    private $datePrelev;

    /**
     * @var \Paiement
     *
     * @ORM\ManyToOne(targetEntity="Paiement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="paiement_id", referencedColumnName="id")
     * })
     */
    private $paiement;



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
     * Set numPeriod
     *
     * @param float $numPeriod
     *
     * @return Paiementperiode
     */
    public function setNumPeriod($numPeriod)
    {
        $this->numPeriod = $numPeriod;

        return $this;
    }

    /**
     * Get numPeriod
     *
     * @return float
     */
    public function getNumPeriod()
    {
        return $this->numPeriod;
    }

    /**
     * Set numeraire
     *
     * @param float $numeraire
     *
     * @return Paiementperiode
     */
    public function setNumeraire($numeraire)
    {
        $this->numeraire = $numeraire;

        return $this;
    }

    /**
     * Get numeraire
     *
     * @return float
     */
    public function getNumeraire()
    {
        return $this->numeraire;
    }

    /**
     * Set chequeJeune
     *
     * @param float $chequeJeune
     *
     * @return Paiementperiode
     */
    public function setChequejeune($chequeJeune)
    {
        $this->chequeJeune = $chequeJeune;

        return $this;
    }

    /**
     * Get chequeJeune
     *
     * @return float
     */
    public function getChequejeune()
    {
        return $this->chequeJeune;
    }

    /**
     * Set chequeVacance
     *
     * @param float $chequeVacance
     *
     * @return Paiementperiode
     */
    public function setChequevacance($chequeVacance)
    {
        $this->chequeVacance = $chequeVacance;

        return $this;
    }

    /**
     * Get chequeVacance
     *
     * @return float
     */
    public function getChequevacance()
    {
        return $this->chequeVacance;
    }

    /**
     * Set cheque
     *
     * @param float $cheque
     *
     * @return Paiementperiode
     */
    public function setCheque($cheque)
    {
        $this->cheque = $cheque;

        return $this;
    }

    /**
     * Get cheque
     *
     * @return float
     */
    public function getCheque()
    {
        return $this->cheque;
    }



    /**
     * Set cb
     *
     * @param float $cb
     *
     * @return Paiementperiode
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
     *
     * @return Paiementperiode
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
     * Set datenumeraire
     *
     * @param \DateTime $datenumeraire
     *
     * @return Paiementperiode
     */
    public function setDateNumeraire($dateNumeraire)
    {
        $this->dateNumeraire = $dateNumeraire;

        return $this;
    }

    /**
     * Get datenumeraire
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
     *
     * @return Paiementperiode
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
     *
     * @return Paiementperiode
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
     *
     * @return Paiementperiode
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
    public function getDatecheque()
    {
        return $this->dateCheque;
    }

    /**
     * Set dateCb
     *
     * @param \DateTime $dateCb
     *
     * @return Paiementperiode
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
     *
     * @return Paiementperiode
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

    /**
     * Set paiement
     *
     * @param \EcoleDeMusique\WelcomeBundle\Entity\Paiement $paiement
     *
     * @return Paiementperiode
     */
    public function setPaiement(\EcoleDeMusique\WelcomeBundle\Entity\Paiement $paiement = null)
    {
        $this->paiement = $paiement;

        return $this;
    }

    /**
     * Get paiement
     *
     * @return \EcoleDeMusique\WelcomeBundle\Entity\Paiement
     */
    public function getPaiement()
    {
        return $this->paiement;
    }
}
