<?php

namespace EcoleDeMusique\WelcomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Prof
 *
 * @ORM\Table(name="prof")
 * @ORM\Entity
 */
class Prof
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
     * @var \Doctrine\Common\Collections\ArrayCollection
     * 
     * CE SONT DES COURS, ET NON DES PROFS QUE L'ONE RECUPERE
     *
     * @ORM\OneToMany(targetEntity="EcoleDeMusique\WelcomeBundle\Entity\Cours", mappedBy="prof", cascade={"persist"})
     *
     */
    private $profs;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->profs = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Prof
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
     * @return Prof
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
     * Add profs
     *
     * @param EcoleDeMusique\WelcomeBundle\Entity\Cours $profs
     * @return Prof
     */
    public function addProf(\EcoleDeMusique\WelcomeBundle\Entity\Cours $profs)
    {
        $this->profs[] = $profs;
    
        return $this;
}

    /**
     * Remove profs
     *
     * @param EcoleDeMusique\WelcomeBundle\Entity\Cours $profs
     */
    public function removeProf(\EcoleDeMusique\WelcomeBundle\Entity\Cours $profs)
    {
        $this->profs->removeElement($profs);
    }

    /**
     * Get profs
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getProfs()
    {
        return $this->profs;
    }
    
       public function __toString() 
    {
            return "".$this->getPrenom()." ".$this->getNom();
    }
}
