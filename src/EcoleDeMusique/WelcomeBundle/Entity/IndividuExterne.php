<?php

namespace EcoleDeMusique\WelcomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IndividuExterne
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="EcoleDeMusique\WelcomeBundle\Entity\IndividuExterneRepository")
 */
class IndividuExterne
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="dateNaissance", type="string", length=10)
     */
    private $dateNaissance;
    
    /**
     * @var CoordonneePrincipal
     *  
     * Un IndivduCoordonnee disparaitra si un individu disparait. Egalement par principe du DRY, on va persisté un IndividuExterneCoordonnee de coté d'individu
     * 
     * @ORM\ManyToOne(targetEntity="EcoleDeMusique\WelcomeBundle\Entity\IndividuExterneCoordonnee", inversedBy="individuExterne", cascade={"remove", "persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $individuExterneCoordonnee;
    
    //Attribut qui va répérer le coordonnee dominant 
    /**
     * @var string
     *
     * @ORM\Column(name="coordonnee", type="string", length=10)
     */
    private $coordonneePrincipal;
    
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
     * Set nom
     *
     * @param string $nom
     *
     * @return IndividuExterne
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return IndividuExterne
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set dateNaissance
     *
     * @param string $dateNaissance
     *
     * @return IndividuExterne
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    /**
     * Get dateNaissance
     *
     * @return string
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * Set coordonneePrincipal
     *
     * @param string $coordonneePrincipal
     *
     * @return IndividuExterne
     */
    public function setCoordonneePrincipal($coordonneePrincipal)
    {
        $this->coordonneePrincipal = $coordonneePrincipal;

        return $this;
    }

    /**
     * Get coordonneePrincipal
     *
     * @return string
     */
    public function getCoordonneePrincipal()
    {
        return $this->coordonneePrincipal;
    }

    /**
     * Set individuExterneCoordonnee
     *
     * @param \EcoleDeMusique\WelcomeBundle\Entity\IndividuExterneCoordonnee $individuExterneCoordonnee
     *
     * @return IndividuExterne
     */
    public function setIndividuExterneCoordonnee(\EcoleDeMusique\WelcomeBundle\Entity\IndividuExterneCoordonnee $individuExterneCoordonnee)
    {
        $this->individuExterneCoordonnee = $individuExterneCoordonnee;

        return $this;
    }

    /**
     * Get individuExterneCoordonnee
     *
     * @return \EcoleDeMusique\WelcomeBundle\Entity\IndividuExterneCoordonnee
     */
    public function getIndividuExterneCoordonnee()
    {
        return $this->individuExterneCoordonnee;
    }
}
