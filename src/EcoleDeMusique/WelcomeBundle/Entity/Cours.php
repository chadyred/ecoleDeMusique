<?php

namespace EcoleDeMusique\WelcomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EcoleDeMusique\WelcomeBundle\Entity\Cours
 */
class Cours
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var \DateTime $date
     */
    private $date;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $courss;

    /**
     * @var EcoleDeMusique\WelcomeBundle\Entity\Prof
     */
    private $prof;

    /**
     * @var EcoleDeMusique\WelcomeBundle\Entity\Salle
     */
    private $salle;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->courss = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set date
     *
     * @param \DateTime $date
     * @return Cours
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Add courss
     *
     * @param EcoleDeMusique\WelcomeBundle\Entity\CoursEleve $courss
     * @return Cours
     */
    public function addCours(\EcoleDeMusique\WelcomeBundle\Entity\CoursEleve $courss)
    {
        $this->courss[] = $courss;
    
        return $this;
    }

    /**
     * Remove courss
     *
     * @param EcoleDeMusique\WelcomeBundle\Entity\CoursEleve $courss
     */
    public function removeCours(\EcoleDeMusique\WelcomeBundle\Entity\CoursEleve $courss)
    {
        $this->courss->removeElement($courss);
    }

    /**
     * Get courss
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getCourss()
    {
        return $this->courss;
    }

    /**
     * Set prof
     *
     * @param EcoleDeMusique\WelcomeBundle\Entity\Prof $prof
     * @return Cours
     */
    public function setProf(\EcoleDeMusique\WelcomeBundle\Entity\Prof $prof = null)
    {
        $this->prof = $prof;
    
        return $this;
    }

    /**
     * Get prof
     *
     * @return EcoleDeMusique\WelcomeBundle\Entity\Prof 
     */
    public function getProf()
    {
        return $this->prof;
    }

    /**
     * Set salle
     *
     * @param EcoleDeMusique\WelcomeBundle\Entity\Salle $salle
     * @return Cours
     */
    public function setSalle(\EcoleDeMusique\WelcomeBundle\Entity\Salle $salle = null)
    {
        $this->salle = $salle;
    
        return $this;
    }

    /**
     * Get salle
     *
     * @return EcoleDeMusique\WelcomeBundle\Entity\Salle 
     */
    public function getSalle()
    {
        return $this->salle;
    }
    /**
     * @var \DateTime $dateDeb
     */
    private $dateDeb;

    /**
     * @var \DateTime $dateFin
     */
    private $dateFin;


    /**
     * Set dateDeb
     *
     * @param \DateTime $dateDeb
     * @return Cours
     */
    public function setDateDeb($dateDeb)
    {
        $this->dateDeb = $dateDeb;
    
        return $this;
    }

    /**
     * Get dateDeb
     *
     * @return \DateTime 
     */
    public function getDateDeb()
    {
        return $this->dateDeb;
    }

    /**
     * Set dateFin
     *
     * @param \DateTime $dateFin
     * @return Cours
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;
    
        return $this;
    }

    /**
     * Get dateFin
     *
     * @return \DateTime 
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }
    /**
     * @var EcoleDeMusique\WelcomeBundle\Entity\Activite
     */
    private $activite;


    /**
     * Set activite
     *
     * @param EcoleDeMusique\WelcomeBundle\Entity\Activite $activite
     * @return Cours
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
}