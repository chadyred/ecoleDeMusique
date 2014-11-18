<?php

namespace EcoleDeMusique\WelcomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Coordonnee
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="EcoleDeMusique\WelcomeBundle\Entity\CoordonneeRepository")
 */
class Coordonnee
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
     * @ORM\Column(name="mail", type="string", length=255)
     */
    private $mail;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="text")
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="telephoneDomicile", type="string", length=255)
     */
    private $telephoneDomicile;

    /**
     * @var string
     *
     * @ORM\Column(name="telephonePortable", type="string", length=255)
     */
    private $telephonePortable;

    /**
     * @var string
     *
     * @ORM\Column(name="note", type="string", length=255)
     */
    private $note;

    /**
     * @var boolean
     *
     * Ceci supprimera so ncoordonnée principal si le coordonnee est supprimé
     * 
     * @ORM\OneToMany(targetEntity="EcoleDeMusique\WelcomeBundle\Entity\IndividuExterneCoordonnee", mappedBy="coordonnee", orphanRemoval=true)
     */
    private $individuExterneCoordonnee;


    /**
     * @var Villephp app/console doctrine:generate:entities
     *
     * @ORM\ManyToOne(targetEntity="EcoleDeMusique\WelcomeBundle\Entity\Ville", inversedBy="coordonnees")
     * @ORM\JoinColumn(nullable=false)
     */
    private $ville;
    


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
     * Set mail
     *
     * @param string $mail
     *
     * @return Coordonnee
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Coordonnee
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set telephoneDomicile
     *
     * @param string $telephoneDomicile
     *
     * @return Coordonnee
     */
    public function setTelephoneDomicile($telephoneDomicile)
    {
        $this->telephoneDomicile = $telephoneDomicile;

        return $this;
    }

    /**
     * Get telephoneDomicile
     *
     * @return string
     */
    public function getTelephoneDomicile()
    {
        return $this->telephoneDomicile;
    }

    /**
     * Set telephonePortable
     *
     * @param string $telephonePortable
     *
     * @return Coordonnee
     */
    public function setTelephonePortable($telephonePortable)
    {
        $this->telephonePortable = $telephonePortable;

        return $this;
    }

    /**
     * Get telephonePortable
     *
     * @return string
     */
    public function getTelephonePortable()
    {
        return $this->telephonePortable;
    }

    /**
     * Set note
     *
     * @param string $note
     *
     * @return Coordonnee
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set coordonneePrincipale
     *
     * @param boolean $coordonneePrincipale
     *
     * @return Coordonnee
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
     * Set individu
     *
     * @param \stdClass $individu
     *
     * @return Coordonnee
     */
    public function setIndividu($individu)
    {
        $this->individu = $individu;

        return $this;
    }

    /**
     * Get individu
     *
     * @return \stdClass
     */
    public function getIndividu()
    {
        return $this->individu;
    }

    /**
     * Set ville
     *
     * @param \stdClass $ville
     *
     * @return Coordonnee
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return \stdClass
     */
    public function getVille()
    {
        return $this->ville;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->individuExterneCoordonnee = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add individuExterneCoordonnee
     *
     * @param \EcoleDeMusique\WelcomeBundle\Entity\IndividuExterneCoordonnee $individuExterneCoordonnee
     *
     * @return Coordonnee
     */
    public function addIndividuExterneCoordonnee(\EcoleDeMusique\WelcomeBundle\Entity\IndividuExterneCoordonnee $individuExterneCoordonnee)
    {
        $this->individuExterneCoordonnee[] = $individuExterneCoordonnee;

        return $this;
    }

    /**
     * Remove individuExterneCoordonnee
     *
     * @param \EcoleDeMusique\WelcomeBundle\Entity\IndividuExterneCoordonnee $individuExterneCoordonnee
     */
    public function removeIndividuExterneCoordonnee(\EcoleDeMusique\WelcomeBundle\Entity\IndividuExterneCoordonnee $individuExterneCoordonnee)
    {
        $this->individuExterneCoordonnee->removeElement($individuExterneCoordonnee);
    }

    /**
     * Get individuExterneCoordonnee
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIndividuExterneCoordonnee()
    {
        return $this->individuExterneCoordonnee;
    }
}
