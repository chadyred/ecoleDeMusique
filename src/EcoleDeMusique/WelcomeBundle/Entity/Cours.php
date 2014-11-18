<?php

namespace EcoleDeMusique\WelcomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cours
 *
 * @ORM\Table(name="cours", indexes={@ORM\Index(name="IDX_FDCA8C9CABC1F7FE", columns={"prof_id"}), @ORM\Index(name="IDX_FDCA8C9CDC304035", columns={"salle_id"}), @ORM\Index(name="IDX_FDCA8C9C9B0F88B1", columns={"activite_id"})})
 * @ORM\Entity
 */
class Cours
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
     * @var \DateTime
     *
     * @ORM\Column(name="dateDeb", type="datetime", nullable=false)
     */
    private $dateDeb;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateFin", type="datetime", nullable=false)
     */
    private $dateFin;

    /**
     * @var \Activite
     *
     * @ORM\ManyToOne(targetEntity="Activite")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="activite_id", referencedColumnName="id")
     * })
     */
    private $activite;

    /**
     * @var \Prof
     *
     * @ORM\ManyToOne(targetEntity="Prof")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="prof_id", referencedColumnName="id")
     * })
     */
    private $prof;

    /**
     * @var \Salle
     *
     * @ORM\ManyToOne(targetEntity="Salle")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="salle_id", referencedColumnName="id")
     * })
     */
    private $salle;
    
    /**
     * @var \Doctrine\Common\Collections\ArrayCollection 
     * 
     *  @ORM\OneToMany(targetEntity="EcoleDeMusique\WelcomeBundle\Entity\CoursEleve", mappedBy="cours")
     */
    private $courss;

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
     * Set datedeb
     *
     * @param \DateTime $datedeb
     *
     * @return Cours
     */
    public function setDateDeb($datedeb)
    {
        $this->dateDeb = $datedeb;

        return $this;
    }

    /**
     * Get datedeb
     *
     * @return \DateTime
     */
    public function getDateDeb()
    {
        return $this->dateDeb;
    }

    /**
     * Set datefin
     *
     * @param \DateTime $datefin
     *
     * @return Cours
     */
    public function setDateFin($datefin)
    {
        $this->dateFin = $datefin;

        return $this;
    }

    /**
     * Get datefin
     *
     * @return \DateTime
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Set activite
     *
     * @param \EcoleDeMusique\WelcomeBundle\Entity\Activite $activite
     *
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
     * @return \EcoleDeMusique\WelcomeBundle\Entity\Activite
     */
    public function getActivite()
    {
        return $this->activite;
    }

    /**
     * Set prof
     *
     * @param \EcoleDeMusique\WelcomeBundle\Entity\Prof $prof
     *
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
     * @return \EcoleDeMusique\WelcomeBundle\Entity\Prof
     */
    public function getProf()
    {
        return $this->prof;
    }

    /**
     * Set salle
     *
     * @param \EcoleDeMusique\WelcomeBundle\Entity\Salle $salle
     *
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
     * @return \EcoleDeMusique\WelcomeBundle\Entity\Salle
     */
    public function getSalle()
    {
        return $this->salle;
    }
}
