<?php

namespace EcoleDeMusique\WelcomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Courseleve
 *
 * @ORM\Table(name="CoursEleve", indexes={@ORM\Index(name="IDX_EC6E66D77ECF78B0", columns={"cours_id"}), @ORM\Index(name="IDX_EC6E66D7A6CC7B2", columns={"eleve_id"})})
 * @ORM\Entity
 */
class CoursEleve
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
     * @var \Cours
     *
     * @ORM\ManyToOne(targetEntity="Cours")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cours_id", referencedColumnName="id")
     * })
     */
    private $cours;

    /**
     * @var \Eleve
     *
     * @ORM\ManyToOne(targetEntity="Eleve")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="eleve_id", referencedColumnName="id")
     * })
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
     * @param \EcoleDeMusique\WelcomeBundle\Entity\Cours $cours
     *
     * @return Courseleve
     */
    public function setCours(\EcoleDeMusique\WelcomeBundle\Entity\Cours $cours = null)
    {
        $this->cours = $cours;

        return $this;
    }

    /**
     * Get cours
     *
     * @return \EcoleDeMusique\WelcomeBundle\Entity\Cours
     */
    public function getCours()
    {
        return $this->cours;
    }

    /**
     * Set eleve
     *
     * @param \EcoleDeMusique\WelcomeBundle\Entity\Eleve $eleve
     *
     * @return Courseleve
     */
    public function setEleve(\EcoleDeMusique\WelcomeBundle\Entity\Eleve $eleve = null)
    {
        $this->eleve = $eleve;

        return $this;
    }

    /**
     * Get eleve
     *
     * @return \EcoleDeMusique\WelcomeBundle\Entity\Eleve
     */
    public function getEleve()
    {
        return $this->eleve;
    }
}
