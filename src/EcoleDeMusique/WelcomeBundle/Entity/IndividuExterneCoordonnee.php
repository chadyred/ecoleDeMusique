<?php

namespace EcoleDeMusique\WelcomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CoordonneePrincipale
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="EcoleDeMusique\WelcomeBundle\Entity\CoordonneePrincipaleRepository")
 */
class IndividuExterneCoordonnee
{       
    /**
     * @var 
     * 
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="EcoleDeMusique\WelcomeBundle\Entity\IndividuExterne", inversedBy="coordonneesPrincipaux")
     * @ORM\JoinColumn(nullable=false)
     */
    private $individuExterne;
    
    
    /**
     * @var 
     *
     * Si l'individu se supprime, l'IndividuExterneCoorddonnee se supprime, ce qui supprimera son coordonnee lié
     *  
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="EcoleDeMusique\WelcomeBundle\Entity\Coordonnee", inversedBy="individuExterneCoordonnee", cascade={"remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $coordonnee;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="coordonneePrincipale", type="boolean")
     */
    private $coordonneePrincipale;

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
     * Set coordonneePrincipale
     *
     * @param boolean $coordonneePrincipale
     *
     * @return CoordonneePrincipale
     */
    public function setCoordonneePrincipale($coordonneePrincipale)
    {
        $this->coordonneePrincipale = $coordonneePrincipale;

        return $this;
    }

    /**
     * Get coordonneePrincipale
     *
     * @return boolean
     */
    public function getCoordonneePrincipale()
    {
        return $this->coordonneePrincipale;
    }

    /**
     * Set individuExterne
     *
     * @param \EcoleDeMusique\WelcomeBundle\Entity\IndividuExterne $individuExterne
     *
     * @return IndividuExterneCoordonnee
     */
    public function setIndividuExterne(\EcoleDeMusique\WelcomeBundle\Entity\IndividuExterne $individuExterne)
    {
        $this->individuExterne = $individuExterne;

        return $this;
    }

    /**
     * Get individuExterne
     *
     * @return \EcoleDeMusique\WelcomeBundle\Entity\IndividuExterne
     */
    public function getIndividuExterne()
    {
        return $this->individuExterne;
    }

    /**
     * Set coordonnee
     *
     * @param \EcoleDeMusique\WelcomeBundle\Entity\Coordonnee $coordonnee
     *
     * @return IndividuExterneCoordonnee
     */
    public function setCoordonnee(\EcoleDeMusique\WelcomeBundle\Entity\Coordonnee $coordonnee)
    {
        $this->coordonnee = $coordonnee;

        return $this;
    }

    /**
     * Get coordonnee
     *
     * @return \EcoleDeMusique\WelcomeBundle\Entity\Coordonnee
     */
    public function getCoordonnee()
    {
        return $this->coordonnee;
    }
}
