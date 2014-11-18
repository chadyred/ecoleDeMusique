<?php

namespace EcoleDeMusique\WelcomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Regie
 *
 * @ORM\Table(name="regie")
 * @ORM\Entity
 */
class Regie
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
     * @ORM\Column(name="capv", type="boolean", nullable=false)
     */
    private $capv;

    /**
     * @var boolean
     *
     * @ORM\Column(name="enfantAdulte", type="boolean", nullable=false)
     */
    private $enfantAdulte;

    /**
     * @var integer
     *
     * @ORM\Column(name="cycleParcours", type="integer", nullable=false)
     */
    private $cycleParcours;

    /**
     * @var string
     *
     * @ORM\Column(name="intru2", type="string", length=255, nullable=false)
     */
    private $intru2;

    /**
     * @var string
     *
     * @ORM\Column(name="intru3", type="string", length=255, nullable=false)
     */
    private $intru3;

    /**
     * @var float
     *
     * @ORM\Column(name="sommeSansRemise", type="float", precision=10, scale=0, nullable=false)
     */
    private $sommeSansRemise;

    /**
     * @var float
     *
     * @ORM\Column(name="remise", type="float", precision=10, scale=0, nullable=false)
     */
    private $remise;

    /**
     * @var float
     *
     * @ORM\Column(name="sommeAvecRemise", type="float", precision=10, scale=0, nullable=false)
     */
    private $sommeAvecRemise;

    /**
     * @var integer
     *
     * @ORM\Column(name="anneDeCours", type="integer", nullable=false)
     */
    private $anneDeCours;



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
     * Set capv
     *
     * @param boolean $capv
     *
     * @return Regie
     */
    public function setCapv($capv)
    {
        $this->capv = $capv;

        return $this;
    }

    /**
     * Get capv
     *
     * @return boolean
     */
    public function getCapv()
    {
        return $this->capv;
    }

    /**
     * Set enfantAdulte
     *
     * @param boolean $enfantAdulte
     *
     * @return Regie
     */
    public function setEnfantAdulte($enfantAdulte)
    {
        $this->enfantAdulte = $enfantAdulte;

        return $this;
    }

    /**
     * Get enfantAdulte
     *
     * @return boolean
     */
    public function getEnfantAdulte()
    {
        return $this->enfantAdulte;
    }

    /**
     * Set cycleParcours
     *
     * @param integer $cycleParcours
     *
     * @return Regie
     */
    public function setCycleParcours($cycleParcours)
    {
        $this->cycleParcours = $cycleParcours;

        return $this;
    }

    /**
     * Get cycleParcours
     *
     * @return integer
     */
    public function getCycleParcours()
    {
        return $this->cycleParcours;
    }

    /**
     * Set intru2
     *
     * @param string $intru2
     *
     * @return Regie
     */
    public function setIntru2($intru2)
    {
        $this->intru2 = $intru2;

        return $this;
    }

    /**
     * Get intru2
     *
     * @return string
     */
    public function getIntru2()
    {
        return $this->intru2;
    }

    /**
     * Set intru3
     *
     * @param string $intru3
     *
     * @return Regie
     */
    public function setIntru3($intru3)
    {
        $this->intru3 = $intru3;

        return $this;
    }

    /**
     * Get intru3
     *
     * @return string
     */
    public function getIntru3()
    {
        return $this->intru3;
    }

    /**
     * Set sommeSansRemise
     *
     * @param float $sommeSansRemise
     *
     * @return Regie
     */
    public function setSommeSansRemise($sommeSansRemise)
    {
        $this->sommeSansRemise = $sommeSansRemise;

        return $this;
    }

    /**
     * Get sommeSansRemise
     *
     * @return float
     */
    public function getSommeSansRemise()
    {
        return $this->sommeSansRemise;
    }

    /**
     * Set remise
     *
     * @param float $remise
     *
     * @return Regie
     */
    public function setRemise($remise)
    {
        $this->remise = $remise;

        return $this;
    }

    /**
     * Get remise
     *
     * @return float
     */
    public function getRemise()
    {
        return $this->remise;
    }

    /**
     * Set sommeAvecRemise
     *
     * @param float $sommeAvecRemise
     *
     * @return Regie
     */
    public function setSommeAvecRemise($sommeAvecRemise)
    {
        $this->sommeAvecRemise = $sommeAvecRemise;

        return $this;
    }

    /**
     * Get sommeAvecRemise
     *
     * @return float
     */
    public function getSommeAvecRemise()
    {
        return $this->sommeAvecRemise;
    }

    /**
     * Set anneDeCours
     *
     * @param integer $anneDeCours
     *
     * @return Regie
     */
    public function setAnneDeCours($anneDeCours)
    {
        $this->anneDeCours = $anneDeCours;

        return $this;
    }

    /**
     * Get anneDeCours
     *
     * @return integer
     */
    public function getAnneDeCours()
    {
        return $this->anneDeCours;
    }
}
