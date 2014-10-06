<?php

namespace EcoleDeMusique\WelcomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EcoleDeMusique\WelcomeBundle\Entity\Eleve
 */
class Eleve
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $nom
     */
    private $nom;

    /**
     * @var string $prenom
     */
    private $prenom;

    /**
     * @var string $adresse
     */
    private $adresse;

    /**
     * @var integer $codePostal
     */
    private $codePostal;

    /**
     * @var string $civilite
     */
    private $civilite;

    /**
     * @var integer $telEleve
     */
    private $telEleve;

    /**
     * @var integer $telMere
     */
    private $telMere;

    /**
     * @var integer $telPere
     */
    private $telPere;

    /**
     * @var \DateTime $dateDeNaissance
     */
    private $dateDeNaissance;

    /**
     * @var string $mail
     */
    private $mail;
   
    /**
     * @var EcoleDeMusique\WelcomeBundle\Entity\Regie
     */
    private $regie;

    /**
     * @var EcoleDeMusique\WelcomeBundle\Entity\Famille
     */
    private $famille;   
    
    /**
     * @ORM\OneToMany(targetEntity="EcoleDeMusique\WelcomeBundle\Entity\Paiement", mappedBy="eleve", cascade={"persist"})
     */
    private $paiement;
    
    
    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     * 
     * CE SONT DES COURSELEVE ET NON DES ELEVES
     */
    private $eleves;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->eleves = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set nom
     *
     * @param string $nom
     * @return Eleve
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
     * @return Eleve
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
     * Set adresse
     *
     * @param string $adresse
     * @return Eleve
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
     * Set codePostal
     *
     * @param integer $codePostal
     * @return Eleve
     */
    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;
    
        return $this;
    }

    /**
     * Get codePostal
     *
     * @return integer 
     */
    public function getCodePostal()
    {
        return $this->codePostal;
    }

    /**
     * Set civilite
     *
     * @param string $civilite
     * @return Eleve
     */
    public function setCivilite($civilite)
    {
        $this->civilite = $civilite;
    
        return $this;
    }

    /**
     * Get civilite
     *
     * @return string 
     */
    public function getCivilite()
    {
        return $this->civilite;
    }

    /**
     * Set telEleve
     *
     * @param integer $telEleve
     * @return Eleve
     */
    public function setTelEleve($telEleve)
    {
        $this->telEleve = $telEleve;
    
        return $this;
    }

    /**
     * Get telEleve
     *
     * @return integer 
     */
    public function getTelEleve()
    {
        return $this->telEleve;
    }

    /**
     * Set telMere
     *
     * @param integer $telMere
     * @return Eleve
     */
    public function setTelMere($telMere)
    {
        $this->telMere = $telMere;
    
        return $this;
    }

    /**
     * Get telMere
     *
     * @return integer 
     */
    public function getTelMere()
    {
        return $this->telMere;
    }

    /**
     * Set telPere
     *
     * @param integer $telPere
     * @return Eleve
     */
    public function setTelPere($telPere)
    {
        $this->telPere = $telPere;
    
        return $this;
    }

    /**
     * Get telPere
     *
     * @return integer 
     */
    public function getTelPere()
    {
        return $this->telPere;
    }

    /**
     * Set dateDeNaissance
     *
     * @param \DateTime $dateDeNaissance
     * @return Eleve
     */
    public function setDateDeNaissance($dateDeNaissance)
    {
        $this->dateDeNaissance = $dateDeNaissance;
    
        return $this;
    }

    /**
     * Get dateDeNaissance
     *
     * @return \DateTime 
     */
    public function getDateDeNaissance()
    {
        return $this->dateDeNaissance;
    }

    /**
     * Set mail
     *
     * @param string $mail
     * @return Eleve
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
     * Set regie
     *
     * @param EcoleDeMusique\WelcomeBundle\Entity\Regie $regie
     * @return Eleve
     */
    public function setRegie(\EcoleDeMusique\WelcomeBundle\Entity\Regie $regie = null)
    {
        $this->regie = $regie;
    
        return $this;
    }

    /**
     * Get regie
     *
     * @return EcoleDeMusique\WelcomeBundle\Entity\Regie 
     */
    public function getRegie()
    {
        return $this->regie;
    }

    /**
     * Set famille
     *
     * @param EcoleDeMusique\WelcomeBundle\Entity\Famille $famille
     * @return Eleve
     */
    public function setFamille(\EcoleDeMusique\WelcomeBundle\Entity\Famille $famille = null)
    {
        $this->famille = $famille;
    
        return $this;
    }

    /**
     * Get famille
     *
     * @return EcoleDeMusique\WelcomeBundle\Entity\Famille 
     */
    public function getFamille()
    {
        return $this->famille;
    }
    
    
   public function __toString() 
    {
            return $this->getNom()." ".$this->getPrenom();
    }
   
       


    /**
     * Set paiement
     *
     * @param EcoleDeMusique\WelcomeBundle\Entity\Paiement $paiement
     * @return Eleve
     */
    public function setPaiement(\EcoleDeMusique\WelcomeBundle\Entity\Paiement $paiement = null)
    {
        $this->paiement = $paiement;
    
        return $this;
    }

    /**
     * Get paiement
     *
     * @return EcoleDeMusique\WelcomeBundle\Entity\Paiement 
     */
    public function getPaiement()
    {
        return $this->paiement;
    }
    
    /**
     * Add eleves
     *
     * @param EcoleDeMusique\WelcomeBundle\Entity\Paiement $eleves
     * @return Eleve
     */
    public function addEleve(\EcoleDeMusique\WelcomeBundle\Entity\CoursEleve $eleve)
    {
        $this->eleves[] = $eleve;
    
        return $this;
    }

    /**
     * Remove eleves
     *
     * @param EcoleDeMusique\WelcomeBundle\Entity\Paiement $eleves
     */
    public function removeEleve(\EcoleDeMusique\WelcomeBundle\Entity\CoursEleve $eleve)
    {
        $this->eleves->removeElement($eleve);
    }

    /**
     * Get eleves
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getEleves()
    {
        return $this->eleves;
    }
    /**
     * @var string $ville
     */
    private $ville;


    /**
     * Set ville
     *
     * @param string $ville
     * @return Eleve
     */
    public function setVille($ville)
    {
        $this->ville = $ville;
    
        return $this;
    }

    /**
     * Get ville
     *
     * @return string 
     */
    public function getVille()
    {
        return $this->ville;
    }
   
 
        /**
     * Add activitesEleve
     *
     * @param EcoleDeMusique\WelcomeBundle\Entity\ActiviteEleve $activites
     * @return Activite
     */
    public function addActivite(\EcoleDeMusique\WelcomeBundle\Entity\ActiviteEleve $activites)
    {
        $this->activites[] = $activites;
    
        return $this;
    }

    /**
     * Remove activites
     *
     * @param EcoleDeMusique\WelcomeBundle\Entity\ActiviteEleve $activites
     */
    public function removeActivite(\EcoleDeMusique\WelcomeBundle\Entity\ActiviteEleve $activites)
    {
        $this->activites->removeElement($activites);
    }

    /**
     * Get activites
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getActivites()
    {
        return $this->activites;
    }
    
    public function findremisebyeleve() {
        return $this->getRegie()->getRemise();
       
    }
    
     public function findSommeAvecRemise(){
         return $this->getRegie()->getSommeAvecRemise();
     }
    
}