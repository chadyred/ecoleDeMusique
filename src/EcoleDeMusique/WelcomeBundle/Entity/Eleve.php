<?php

namespace EcoleDeMusique\WelcomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Eleve
 *
 * @ORM\Table(name="eleve", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_ECA105F746F21B0B", columns={"regie_id"})}, indexes={@ORM\Index(name="IDX_ECA105F797A77B84", columns={"famille_id"})})
 * @ORM\Entity
 */
class Eleve
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
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255, nullable=false)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255, nullable=false)
     */
    private $adresse;

    /**
     * @var integer
     *
     * @ORM\Column(name="codePostal", type="integer", nullable=false)
     */
    private $codePostal;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=255, nullable=false)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="civilite", type="string", length=255, nullable=false)
     */
    private $civilite;

    /**
     * @var string
     *
     * @ORM\Column(name="telEleve", type="string", length=255, nullable=false)
     */
    private $telEleve;

    /**
     * @var string
     *
     * @ORM\Column(name="telMere", type="string", length=255, nullable=false)
     */
    private $telMere;

    /**
     * @var string
     *
     * @ORM\Column(name="telPere", type="string", length=255, nullable=false)
     */
    private $telPere;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDeNaissance", type="date", nullable=false)
     */
    private $dateDeNaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=255, nullable=false)
     */
    private $mail;

    /**
     * @var \Regie
     *
     * @ORM\ManyToOne(targetEntity="Regie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="regie_id", referencedColumnName="id")
     * })
     */
    private $regie;

    /**
     * @var \Famille
     *
     * @ORM\ManyToOne(targetEntity="Famille")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="famille_id", referencedColumnName="id")
     * })
     */
    private $famille;

    /**
     * @ORM\OneToMany(targetEntity="EcoleDeMusique\WelcomeBundle\Entity\Paiement", mappedBy="eleve", cascade={"persist"})
     */
    private $paiement;


    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     * 
     * Orphan removal Ne fonctionne pas - !! $eleves POINTES LES COURS !!
     * 
     * @ORM\OneToMany(targetEntity="EcoleDeMusique\WelcomeBundle\Entity\CoursEleve", orphanRemoval=true, mappedBy="eleve")
     */
    private $eleves;
    
     /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     * 
     * Orphan removal Ne fonctionne 
     * 
     * @ORM\OneToMany(targetEntity="EcoleDeMusique\WelcomeBundle\Entity\ActiviteEleve", orphanRemoval=true, mappedBy="eleve")
     */
    private $activitesEleves;
    
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->eleves = new \Doctrine\Common\Collections\ArrayCollection();
        $this->activitesEleves = new \Doctrine\Common\Collections\ArrayCollection();
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
     *
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
     *
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
     *
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
     *
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
     * Set ville
     *
     * @param string $ville
     *
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
     * Set civilite
     *
     * @param string $civilite
     *
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
     * @param string $telEleve
     *
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
     * @return string
     */
    public function getTelEleve()
    {
        return $this->telEleve;
    }

    /**
     * Set telmere
     *
     * @param string $telmere
     *
     * @return Eleve
     */
    public function setTelMere($telmere)
    {
        $this->telMere = $telmere;

        return $this;
    }

    /**
     * Get telmere
     *
     * @return string
     */
    public function getTelMere()
    {
        return $this->telMere;
    }

    /**
     * Set telpere
     *
     * @param string $telpere
     *
     * @return Eleve
     */
    public function setTelPere($telpere)
    {
        $this->telPere = $telpere;

        return $this;
    }

    /**
     * Get telpere
     *
     * @return string
     */
    public function getTelPere()
    {
        return $this->telPere;
    }

    /**
     * Set datedenaissance
     *
     * @param \DateTime $datedenaissance
     *
     * @return Eleve
     */
    public function setDateDeNaissance($datedenaissance)
    {
        $this->dateDeNaissance = $datedenaissance;

        return $this;
    }

    /**
     * Get datedenaissance
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
     * @param \EcoleDeMusique\WelcomeBundle\Entity\Regie $regie
     *
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
     * @return \EcoleDeMusique\WelcomeBundle\Entity\Regie
     */
    public function getRegie()
    {
        return $this->regie;
    }

    /**
     * Set famille
     *
     * @param \EcoleDeMusique\WelcomeBundle\Entity\Famille $famille
     *
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
     * @return \EcoleDeMusique\WelcomeBundle\Entity\Famille
     */
    public function getFamille()
    {
        return $this->famille;
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
     * Add activitesEleve
     *
     * @param EcoleDeMusique\WelcomeBundle\Entity\ActiviteEleve $activites
     * @return Activite
     */
    public function addActivite(\EcoleDeMusique\WelcomeBundle\Entity\ActiviteEleve $activites)
    {
        $this->activitesEleves[] = $activites;
    
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
        return $this->activitesEleves;
    }
    
    public function findremisebyeleve() {
        return $this->getRegie()->getRemise();
       
    }
    
     public function findSommeAvecRemise(){
         return $this->getRegie()->getSommeAvecRemise();
     }
    
     
   public function __toString() 
    {
            return $this->getNom()." ".$this->getPrenom();
    }
}
