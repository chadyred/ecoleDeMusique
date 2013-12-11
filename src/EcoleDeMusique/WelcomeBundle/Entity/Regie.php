<?php

namespace EcoleDeMusique\WelcomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EcoleDeMusique\WelcomeBundle\Entity\Regie
 */
class Regie
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var boolean $capv
     */
    private $capv;

    /**
     * @var boolean $enfantAdulte
     */
    private $enfantAdulte;

    /**
     * @var integer $cycleParcours
     */
    private $cycleParcours;

    /**
     * @var string $intru2
     */
    private $intru2;

    /**
     * @var string $intru3
     */
    private $intru3;

    /**
     * @var integer $sommeSansRemise
     */
    private $sommeSansRemise;

    /**
     * @var integer $remise
     */
    private $remise;

    /**
     * @var integer $sommeAvecRemise
     */
    private $sommeAvecRemise;

    /**
     * @var EcoleDeMusique\WelcomeBundle\Entity\Eleve
     */
    private $regies;


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
     * @param integer $sommeSansRemise
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
     * @return integer 
     */
    public function getSommeSansRemise()
    {
        return $this->sommeSansRemise;
    }

    /**
     * Set remise
     *
     * @param integer $remise
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
     * @return integer 
     */
    public function getRemise()
    {
        return $this->remise;
    }

    /**
     * Set sommeAvecRemise
     *
     * @param integer $sommeAvecRemise
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
     * @return integer 
     */
    public function getSommeAvecRemise()
    {
        return $this->sommeAvecRemise;
    }

    /**
     * Set regies
     *
     * @param EcoleDeMusique\WelcomeBundle\Entity\Eleve $regies
     * @return Regie
     */
    public function setRegies(\EcoleDeMusique\WelcomeBundle\Entity\Eleve $regies = null)
    {
        $this->regies = $regies;
    
        return $this;
    }

    /**
     * Get regies
     *
     * @return EcoleDeMusique\WelcomeBundle\Entity\Eleve 
     */
    public function getRegies()
    {
        return $this->regies;
    }
    
      public function __toString() 
    {
            return "".$this->getId();
    }
    

    /**
     * @var integer $anneDeCours
     */
    private $anneDeCours;


    /**
     * Set anneDeCours
     *
     * @param integer $anneDeCours
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