<?php

namespace EcoleDeMusique\WelcomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EcoleDeMusique\WelcomeBundle\Entity\CoursEleve
 */
class CoursEleve
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var EcoleDeMusique\WelcomeBundle\Entity\Cours
     */
    private $cours;

    /**
     * @var EcoleDeMusique\WelcomeBundle\Entity\Eleve
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
     * Set cours
     *
     * @param EcoleDeMusique\WelcomeBundle\Entity\Cours $cours
     * @return CoursEleve
     */
    public function setCours(\EcoleDeMusique\WelcomeBundle\Entity\Cours $cours = null)
    {
        $this->cours = $cours;
    
        return $this;
    }

    /**
     * Get cours
     *
     * @return EcoleDeMusique\WelcomeBundle\Entity\Cours 
     */
    public function getCours()
    {
        return $this->cours;
    }

    /**
     * Set eleve
     *
     * @param EcoleDeMusique\WelcomeBundle\Entity\Eleve $eleve
     * @return CoursEleve
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