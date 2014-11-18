<?php

namespace EcoleDeMusique\WelcomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ville
 *
 * @ORM\Table(name="Ville", uniqueConstraints={@ORM\UniqueConstraint(name="ville_code_commune_2", columns={"ville_code_commune"}), @ORM\UniqueConstraint(name="ville_slug", columns={"ville_slug"})}, indexes={@ORM\Index(name="ville_departement", columns={"ville_departement"}), @ORM\Index(name="ville_nom", columns={"ville_nom"}), @ORM\Index(name="ville_nom_reel", columns={"ville_nom_reel"}), @ORM\Index(name="ville_code_postal", columns={"ville_code_postal"}), @ORM\Index(name="ville_longitude_latitude_deg", columns={"ville_longitude_deg", "ville_latitude_deg"}), @ORM\Index(name="ville_nom_soundex", columns={"ville_nom_soundex"}), @ORM\Index(name="ville_nom_metaphone", columns={"ville_nom_metaphone"}), @ORM\Index(name="ville_population_2010", columns={"ville_population_2010"}), @ORM\Index(name="ville_nom_simple", columns={"ville_nom_simple"})})
 * @ORM\Entity
 */
class Ville
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
