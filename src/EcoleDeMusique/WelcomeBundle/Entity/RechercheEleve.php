<?php

namespace EcoleDeMusique\WelcomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EcoleDeMusique\WelcomeBundle\Entity\RechercheEleve
 */
class RechercheEleve
{

    /**
     * @var Doctrine\Common\Collections\Collection 
     */
    public $activiteEleve;
        /**
     * Constructor
     */
    public function __construct()
    {
        $this->activiteEleve = new \Doctrine\Common\Collections\ArrayCollection();
    }
  
/**
     * Add activiteEleve
     *
     * @param EcoleDeMusique\WelcomeBundle\Entity\ActiviteEleve $activiteEleve
     * @return Activite
     */
    public function addActiviteEleve(\EcoleDeMusique\WelcomeBundle\Entity\ActiviteEleve $activiteEleve)
    {
        $this->activiteEleve[] = $activiteEleve;
    
        return $this;
    }

    /**
     * Remove activiteEleve
     *
     * @param EcoleDeMusique\WelcomeBundle\Entity\ActiviteEleve $activiteEleve
     */
    public function removeActiviteEleve(\EcoleDeMusique\WelcomeBundle\Entity\ActiviteEleve $activiteEleve)
    {
        $this->activiteEleve->removeElement($activiteEleve);
    }

    /**
     * Get activites
     *
     * @return EcoleDeMusique\WelcomeBundle\Entity\ActiviteEleve
     */
    public function getActiviteEleve()
    {
        return $this->activiteEleve;
    }
    
    public function getNomActivites()
    {
        $i=0;
        foreach ($this->activiteEleve as $activite){
           $tab[i]=$activite->getActivite()->getNom(); 
           $i++;
        }
        return $tab;
    }
    
}
