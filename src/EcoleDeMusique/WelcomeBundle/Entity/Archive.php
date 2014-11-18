<?php

namespace EcoleDeMusique\WelcomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Archive
 *
 * @ORM\Table(name="archive")
 * @ORM\Entity
 */
class Archive
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
     * @var \DateTime
     *
     * @ORM\Column(name="dateDeNaissance", type="date", nullable=false)
     */
    private $dateDeNaissance;

    /**
     * @var integer
     *
     * @ORM\Column(name="cycle", type="integer", nullable=false)
     */
    private $cycle;

    /**
     * @var string
     *
     * @ORM\Column(name="instru1", type="string", length=255, nullable=false)
     */
    private $instru1;

    /**
     * @var string
     *
     * @ORM\Column(name="instru2", type="string", length=255, nullable=false)
     */
    private $instru2;

    /**
     * @var integer
     *
     * @ORM\Column(name="anneeActivite", type="integer", nullable=false)
     */
    private $anneeActivite;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="interuptionCourannee", type="date", nullable=true)
     */
    private $interuptionCourannee;



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
     * @return Archive
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
     * @return Archive
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
     * Set datedenaissance
     *
     * @param \DateTime $datedenaissance
     *
     * @return Archive
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
     * Set cycle
     *
     * @param integer $cycle
     *
     * @return Archive
     */
    public function setCycle($cycle)
    {
        $this->cycle = $cycle;

        return $this;
    }

    /**
     * Get cycle
     *
     * @return integer
     */
    public function getCycle()
    {
        return $this->cycle;
    }

    /**
     * Set instru1
     *
     * @param string $instru1
     *
     * @return Archive
     */
    public function setInstru1($instru1)
    {
        $this->instru1 = $instru1;

        return $this;
    }

    /**
     * Get instru1
     *
     * @return string
     */
    public function getInstru1()
    {
        return $this->instru1;
    }

    /**
     * Set instru2
     *
     * @param string $instru2
     *
     * @return Archive
     */
    public function setInstru2($instru2)
    {
        $this->instru2 = $instru2;

        return $this;
    }

    /**
     * Get instru2
     *
     * @return string
     */
    public function getInstru2()
    {
        return $this->instru2;
    }

    /**
     * Set anneeactivite
     *
     * @param integer $anneeactivite
     *
     * @return Archive
     */
    public function setAnneeActivite($anneeactivite)
    {
        $this->anneeActivite = $anneeactivite;

        return $this;
    }

    /**
     * Get anneeactivite
     *
     * @return integer
     */
    public function getAnneeActivite()
    {
        return $this->anneeActivite;
    }

    /**
     * Set interuptioncourannee
     *
     * @param \DateTime $interuptioncourannee
     *
     * @return Archive
     */
    public function setInteruptionCourannee($interuptioncourannee)
    {
        $this->interuptionCourannee = $interuptioncourannee;

        return $this;
    }

    /**
     * Get interuptioncourannee
     *
     * @return \DateTime
     */
    public function getInteruptionCourannee()
    {
        return $this->interuptionCourannee;
    }
}
