<?php

namespace EcoleDeMusique\WelcomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formule
 *
 * @ORM\Table(name="formule")
 * @ORM\Entity
 */
class Formule
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
     * @var integer
     *
     * @ORM\Column(name="cycle", type="integer", nullable=false)
     */
    private $cycle;
    
    /**
     * @var string $name
     * 
     * Name n'est pas utilisé
     */
    private $name;


    /**
     * @var string
     *
     * @ORM\Column(name="formule", type="string", length=255, nullable=false)
     */
    private $formule;

    /**
     * @var float
     *
     * @ORM\Column(name="param1", type="float", precision=10, scale=0, nullable=false)
     */
    private $param1;

    /**
     * @var float
     *
     * @ORM\Column(name="param2", type="float", precision=10, scale=0, nullable=false)
     */
    private $param2;

    /**
     * @var float
     *
     * @ORM\Column(name="param3", type="float", precision=10, scale=0, nullable=false)
     */
    private $param3;

    /**
     * @var float
     *
     * @ORM\Column(name="param4", type="float", precision=10, scale=0, nullable=false)
     */
    private $param4;

    /**
     * @var float
     *
     * @ORM\Column(name="param5", type="float", precision=10, scale=0, nullable=false)
     */
    private $param5;

    /**
     * @var float
     *
     * @ORM\Column(name="multiplicateurAdulte", type="float", precision=10, scale=0, nullable=false)
     */
    private $multiplicateurAdulte;

    /**
     * @var float
     *
     * @ORM\Column(name="coefCapv", type="float", precision=10, scale=0, nullable=false)
     */
    private $coefcapv;

    /**
     * @var float
     *
     * @ORM\Column(name="coefInstru2", type="float", precision=10, scale=0, nullable=false)
     */
    private $coefInstru2;

    /**
     * @var float
     *
     * @ORM\Column(name="coefInstru3", type="float", precision=10, scale=0, nullable=false)
     */
    private $coefInstru3;

    /**
     * @var float
     *
     * @ORM\Column(name="coef2eleves", type="float", precision=10, scale=0, nullable=false)
     */
    private $coef2eleves;

    /**
     * @var float
     *
     * @ORM\Column(name="coef3eleves", type="float", precision=10, scale=0, nullable=false)
     */
    private $coef3eleves;

    /**
     * @var float
     *
     * @ORM\Column(name="coef4eleves", type="float", precision=10, scale=0, nullable=false)
     */
    private $coef4eleves;

    /**
     * @var float
     *
     * @ORM\Column(name="coef5eleves", type="float", precision=10, scale=0, nullable=false)
     */
    private $coef5eleves;

    /**
     * @var float
     *
     * @ORM\Column(name="coefcyle0", type="float", precision=10, scale=0, nullable=false)
     */
    private $coefcyle0;

    /**
     * @var float
     *
     * @ORM\Column(name="coefcyle1", type="float", precision=10, scale=0, nullable=false)
     */
    private $coefcyle1;

    /**
     * @var float
     *
     * @ORM\Column(name="coefcyle2", type="float", precision=10, scale=0, nullable=false)
     */
    private $coefcyle2;

    /**
     * @var float
     *
     * @ORM\Column(name="coefcyle3", type="float", precision=10, scale=0, nullable=false)
     */
    private $coefcyle3;

    /**
     * @var float
     *
     * @ORM\Column(name="tarifMax", type="float", precision=10, scale=0, nullable=false)
     */
    private $tarifMax;


    /**
     * @var float $sommeMax
     */
    private $sommeMax;

    
    /**
     * @var float $tarifMaxCapv
     */
    private $tarifMaxCapv;

    /**
     * @var float $tarifMaxHorsCapv
     */
    private $tarifMaxHorsCapv;

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
     * Set cycle
     *
     * @param integer $cycle
     *
     * @return Formule
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
     * Set name
     *
     * @param string $name
     * @return Formule
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set formule
     *
     * @param string $formule
     *
     * @return Formule
     */
    public function setFormule($formule)
    {
        $this->formule = $formule;

        return $this;
    }

    /**
     * Get formule
     *
     * @return string
     */
    public function getFormule()
    {
        return $this->formule;
    }

    /**
     * Set param1
     *
     * @param float $param1
     *
     * @return Formule
     */
    public function setParam1($param1)
    {
        $this->param1 = $param1;

        return $this;
    }

    /**
     * Get param1
     *
     * @return float
     */
    public function getParam1()
    {
        return $this->param1;
    }

    /**
     * Set param2
     *
     * @param float $param2
     *
     * @return Formule
     */
    public function setParam2($param2)
    {
        $this->param2 = $param2;

        return $this;
    }

    /**
     * Get param2
     *
     * @return float
     */
    public function getParam2()
    {
        return $this->param2;
    }

    /**
     * Set param3
     *
     * @param float $param3
     *
     * @return Formule
     */
    public function setParam3($param3)
    {
        $this->param3 = $param3;

        return $this;
    }

    /**
     * Get param3
     *
     * @return float
     */
    public function getParam3()
    {
        return $this->param3;
    }

    /**
     * Set param4
     *
     * @param float $param4
     *
     * @return Formule
     */
    public function setParam4($param4)
    {
        $this->param4 = $param4;

        return $this;
    }

    /**
     * Get param4
     *
     * @return float
     */
    public function getParam4()
    {
        return $this->param4;
    }

    /**
     * Set param5
     *
     * @param float $param5
     *
     * @return Formule
     */
    public function setParam5($param5)
    {
        $this->param5 = $param5;

        return $this;
    }

    /**
     * Get param5
     *
     * @return float
     */
    public function getParam5()
    {
        return $this->param5;
    }

    /**
     * Set multiplicateurAdulte
     *
     * @param float $multiplicateurAdulte
     *
     * @return Formule
     */
    public function setMultiplicateurAdulte($multiplicateurAdulte)
    {
        $this->multiplicateurAdulte = $multiplicateurAdulte;

        return $this;
    }

    /**
     * Get multiplicateurAdulte
     *
     * @return float
     */
    public function getMultiplicateurAdulte()
    {
        return $this->multiplicateurAdulte;
    }

    /**
     * Set coefcapv
     *
     * @param float $coefcapv
     *
     * @return Formule
     */
    public function setCoefcapv($coefcapv)
    {
        $this->coefcapv = $coefcapv;

        return $this;
    }

    /**
     * Get coefcapv
     *
     * @return float
     */
    public function getCoefcapv()
    {
        return $this->coefcapv;
    }

    /**
     * Set coefInstru2
     *
     * @param float $coefInstru2
     *
     * @return Formule
     */
    public function setCoefInstru2($coefInstru2)
    {
        $this->coefInstru2 = $coefInstru2;

        return $this;
    }

    /**
     * Get coefInstru2
     *
     * @return float
     */
    public function getCoefInstru2()
    {
        return $this->coefInstru2;
    }

    /**
     * Set coefInstru3
     *
     * @param float $coefInstru3
     *
     * @return Formule
     */
    public function setCoefInstru3($coefInstru3)
    {
        $this->coefInstru3 = $coefInstru3;

        return $this;
    }

    /**
     * Get coefInstru3
     *
     * @return float
     */
    public function getCoefInstru3()
    {
        return $this->coefInstru3;
    }

    /**
     * Set coef2eleves
     *
     * @param float $coef2eleves
     *
     * @return Formule
     */
    public function setCoef2eleves($coef2eleves)
    {
        $this->coef2eleves = $coef2eleves;

        return $this;
    }

    /**
     * Get coef2eleves
     *
     * @return float
     */
    public function getCoef2eleves()
    {
        return $this->coef2eleves;
    }

    /**
     * Set coef3eleves
     *
     * @param float $coef3eleves
     *
     * @return Formule
     */
    public function setCoef3eleves($coef3eleves)
    {
        $this->coef3eleves = $coef3eleves;

        return $this;
    }

    /**
     * Get coef3eleves
     *
     * @return float
     */
    public function getCoef3eleves()
    {
        return $this->coef3eleves;
    }

    /**
     * Set coef4eleves
     *
     * @param float $coef4eleves
     *
     * @return Formule
     */
    public function setCoef4eleves($coef4eleves)
    {
        $this->coef4eleves = $coef4eleves;

        return $this;
    }

    /**
     * Get coef4eleves
     *
     * @return float
     */
    public function getCoef4eleves()
    {
        return $this->coef4eleves;
    }

    /**
     * Set coef5eleves
     *
     * @param float $coef5eleves
     *
     * @return Formule
     */
    public function setCoef5eleves($coef5eleves)
    {
        $this->coef5eleves = $coef5eleves;

        return $this;
    }

    /**
     * Get coef5eleves
     *
     * @return float
     */
    public function getCoef5eleves()
    {
        return $this->coef5eleves;
    }

    /**
     * Set coefcyle0
     *
     * @param float $coefcyle0
     *
     * @return Formule
     */
    public function setCoefcyle0($coefcyle0)
    {
        $this->coefcyle0 = $coefcyle0;

        return $this;
    }

    /**
     * Get coefcyle0
     *
     * @return float
     */
    public function getCoefcyle0()
    {
        return $this->coefcyle0;
    }

    /**
     * Set coefcyle1
     *
     * @param float $coefcyle1
     *
     * @return Formule
     */
    public function setCoefcyle1($coefcyle1)
    {
        $this->coefcyle1 = $coefcyle1;

        return $this;
    }

    /**
     * Get coefcyle1
     *
     * @return float
     */
    public function getCoefcyle1()
    {
        return $this->coefcyle1;
    }

    /**
     * Set coefcyle2
     *
     * @param float $coefcyle2
     *
     * @return Formule
     */
    public function setCoefcyle2($coefcyle2)
    {
        $this->coefcyle2 = $coefcyle2;

        return $this;
    }

    /**
     * Get coefcyle2
     *
     * @return float
     */
    public function getCoefcyle2()
    {
        return $this->coefcyle2;
    }

    /**
     * Set coefcyle3
     *
     * @param float $coefcyle3
     *
     * @return Formule
     */
    public function setCoefcyle3($coefcyle3)
    {
        $this->coefcyle3 = $coefcyle3;

        return $this;
    }

    /**
     * Get coefcyle3
     *
     * @return float
     */
    public function getCoefcyle3()
    {
        return $this->coefcyle3;
    }



    /**
     * Set tarifMax
     *
     * @param float $tarifMax
     * @return Formule
     */
    public function setTarifMax($tarifMax)
    {
        $this->tarifMax = $tarifMax;

        return $this;
    }

    /**
     * Get tarifmax
     *
     * @return float
     */
    public function getTarifMax()
    {
        return $this->tarifMax;
    }

    /**
     * Set tarifMaxHorsCapv
     *
     * @param float $tarifMaxHorsCapv
     * @return Formule
     */
    public function setTarifMaxHorsCapv($tarifMaxHorsCapv)
    {
        $this->tarifMaxHorsCapv = $tarifMaxHorsCapv;
    
        return $this;
    }

    /**
     * Get tarifMaxHorsCapv
     *
     * @return float 
     */
    public function getTarifMaxHorsCapv()
    {
        return $this->tarifMaxHorsCapv;
    }

     /**
     * Set tarifMaxCapv
     *
     * @param float $tarifMaxCapv
     * @return Formule
     */
    public function setTarifMaxCapv($tarifMaxCapv)
    {
        $this->tarifMaxCapv = $tarifMaxCapv;
    
        return $this;
    }
    /**
     * Get tarifMaxCapv
     *
     * @return float 
     */
    public function getTarifMaxCapv()
    {
        return $this->tarifMaxCapv;
    }
    
    /**
     * Set sommeMax
     *
     * @param float $sommeMax
     * @return Formule
     */
    public function setSommeMax($sommeMax)
    {
        $this->sommeMax = $sommeMax;
    
        return $this;
    }

    /**
     * Get sommeMax
     *
     * @return float 
     */
    public function getSommeMax()
    {
        return $this->sommeMax;
    }
    
    /**
     * Fonction qui transforme une chaine en float. On regarde si il y a une virgule ou non.
     * 
     * @param type $num
     * @return type
     */
    public static function tofloat($num)
    {
        $dotPos = strrpos($num, '.');
        $commaPos = strrpos($num, ',');
        $sep = (($dotPos > $commaPos) && $dotPos) ? $dotPos : 
            ((($commaPos > $dotPos) && $commaPos) ? $commaPos : false);

        if (!$sep) {
            return floatval(preg_replace("/[^0-9]/", "", $num));
        } 

        return floatval(
            preg_replace("/[^0-9]/", "", substr($num, 0, $sep)) . '.' .
            preg_replace("/[^0-9]/", "", substr($num, $sep+1, strlen($num)))
        );
    }
}
