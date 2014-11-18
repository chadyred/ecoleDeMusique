<?php

namespace EcoleDeMusique\WelcomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Paiement
 *
 * @ORM\Table(name="paiement", indexes={@ORM\Index(name="IDX_B1DC7A1EA6CC7B2", columns={"eleve_id"})})
 * @ORM\Entity
 */
class Paiement
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
     * @var boolean
     *
     * @ORM\Column(name="interupt", type="boolean", nullable=false)
     */
    private $interupt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateInterupt", type="date", nullable=true)
     */
    private $dateInterupt;

    /**
     * @var float
     *
     * @ORM\Column(name="sommePeriode", type="float", precision=10, scale=0, nullable=false)
     */
    private $sommePeriode;

    /**
     * @var float
     *
     * @ORM\Column(name="sommeTotal", type="float", precision=10, scale=0, nullable=false)
     */
    private $sommeTotal;

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
     *
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
     * Set dateinterupt
     *
     * @param \DateTime $dateInterupt
     *
     * @return Paiement
     */
    public function setDateInterupt($dateInterupt)
    {
        $this->dateInterupt = $dateInterupt;

        return $this;
    }

    /**
     * Get dateinterupt
     *
     * @return \DateTime
     */
    public function getDateInterupt()
    {
        return $this->dateInterupt;
    }

    /**
     * Set sommeperiode
     *
     * @param float $sommeperiode
     *
     * @return Paiement
     */
    public function setSommePeriode($sommePeriode)
    {
        $this->sommePeriode = $sommePeriode;

        return $this;
    }

    /**
     * Get sommeperiode
     *
     * @return float
     */
    public function getSommePeriode()
    {
        return $this->sommePeriode;
    }
    

    /**
     * Set sommetotal
     *
     * @param float $sommetotal
     *
     * @return Paiement
     */
    public function setSommeTotal($sommetotal)
    {
        $this->sommeTotal = $sommetotal;

        return $this;
    }

    /**
     * Get sommetotal
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
     * @param \EcoleDeMusique\WelcomeBundle\Entity\Eleve $eleve
     *
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
     * @return \EcoleDeMusique\WelcomeBundle\Entity\Eleve
     */
    public function getEleve()
    {
        return $this->eleve;
    }
}
