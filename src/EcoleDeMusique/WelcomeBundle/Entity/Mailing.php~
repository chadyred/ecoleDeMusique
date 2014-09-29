<?php

namespace EcoleDeMusique\WelcomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * EcoleDeMusique\WelcomeBundle\Entity\Mailing
 */
class Mailing
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
	 * @ORM\Column(name="titre", type="string", length=50, nullable=false)
	 * @Assert\NotBlank(message="Le champ titre doit contenir un nom valide.")
	 */
private $titre;
         /**
	 * @var string
	 *
	 * @ORM\Column(name="message", type="text", nullable=false)
	 */

private $message;
         /**
	 * @var string
	 * @ORM\Column(name="nomActivite", type="text", nullable=true)
	 */
private $nomActivite;
  	/**
	 * @ORM\ManyToMany(targetEntity="EcoleDeMusique\WelcomeBundle\Entity\ActiviteEleve",inversedBy="mailings", cascade={"persist"})
	 */
private $activiteEleves;  

/**
     * Constructor
     */
    public function __construct()
    {
        $this->activiteEleves = new \Doctrine\Common\Collections\ArrayCollection();
    }
    

/**
	 * Get id
	 *
	 * @return integer 
	 */
public function getId() {
		return $this->id;
	}


public function setTitre($titre) {
	$this->titre = $titre;

	return $this;
}

public function getTitre() {
	return $this->titre;
}


public function getMessage() {
	return $this->message;
}

public function setMessage($message) {
	$this->message = $message;

	return $this;
}

public function getNomActivite() {
	return $this->nomActivite;
}

public function setNomActivite($nomActivite) {
	$this->nomActivite = $nomActivite;

	return $this;
}
    
    /**
     * Get activiteEleves
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getActiviteEleves()
    {
        return $this->activiteEleves;
    }
    
    /**
     * Add activiteEleves
     *
     * @param EcoleDeMusique\WelcomeBundle\Entity\Mailing $activiteEleves
     * @return activiteEleve
     */
    public function addActiviteEleves(\EcoleDeMusique\WelcomeBundle\Entity\Mailing $activiteEleves)
    {
        $this->activiteEleves[] = $activiteEleves;
    
        return $this;
    }

    /**
     * Remove activiteEleves
     *
     * @param EcoleDeMusique\WelcomeBundle\Entity\Mailing $activiteEleves
     */
    public function removeActiviteEleves(\EcoleDeMusique\WelcomeBundle\Entity\Mailing $activiteEleves)
    {
        $this->activiteEleves->removeElement($activiteEleves);
    }

 

}