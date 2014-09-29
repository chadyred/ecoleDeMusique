<?php

namespace Proxies\__CG__\EcoleDeMusique\WelcomeBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Formule extends \EcoleDeMusique\WelcomeBundle\Entity\Formule implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setCycle($cycle)
    {
        $this->__load();
        return parent::setCycle($cycle);
    }

    public function getCycle()
    {
        $this->__load();
        return parent::getCycle();
    }

    public function setName($name)
    {
        $this->__load();
        return parent::setName($name);
    }

    public function getName()
    {
        $this->__load();
        return parent::getName();
    }

    public function setFormule($formule)
    {
        $this->__load();
        return parent::setFormule($formule);
    }

    public function getFormule()
    {
        $this->__load();
        return parent::getFormule();
    }

    public function setParam1($param1)
    {
        $this->__load();
        return parent::setParam1($param1);
    }

    public function getParam1()
    {
        $this->__load();
        return parent::getParam1();
    }

    public function setParam2($param2)
    {
        $this->__load();
        return parent::setParam2($param2);
    }

    public function getParam2()
    {
        $this->__load();
        return parent::getParam2();
    }

    public function setParam3($param3)
    {
        $this->__load();
        return parent::setParam3($param3);
    }

    public function getParam3()
    {
        $this->__load();
        return parent::getParam3();
    }

    public function setParam4($param4)
    {
        $this->__load();
        return parent::setParam4($param4);
    }

    public function getParam4()
    {
        $this->__load();
        return parent::getParam4();
    }

    public function setParam5($param5)
    {
        $this->__load();
        return parent::setParam5($param5);
    }

    public function getParam5()
    {
        $this->__load();
        return parent::getParam5();
    }

    public function setCoefCapv($coefCapv)
    {
        $this->__load();
        return parent::setCoefCapv($coefCapv);
    }

    public function getCoefCapv()
    {
        $this->__load();
        return parent::getCoefCapv();
    }

    public function setCoefInstru2($coefInstru2)
    {
        $this->__load();
        return parent::setCoefInstru2($coefInstru2);
    }

    public function getCoefInstru2()
    {
        $this->__load();
        return parent::getCoefInstru2();
    }

    public function setCoefInstru3($coefInstru3)
    {
        $this->__load();
        return parent::setCoefInstru3($coefInstru3);
    }

    public function getCoefInstru3()
    {
        $this->__load();
        return parent::getCoefInstru3();
    }

    public function setCoef2eleves($coef2eleves)
    {
        $this->__load();
        return parent::setCoef2eleves($coef2eleves);
    }

    public function getCoef2eleves()
    {
        $this->__load();
        return parent::getCoef2eleves();
    }

    public function setCoef3eleves($coef3eleves)
    {
        $this->__load();
        return parent::setCoef3eleves($coef3eleves);
    }

    public function getCoef3eleves()
    {
        $this->__load();
        return parent::getCoef3eleves();
    }

    public function setCoef4eleves($coef4eleves)
    {
        $this->__load();
        return parent::setCoef4eleves($coef4eleves);
    }

    public function getCoef4eleves()
    {
        $this->__load();
        return parent::getCoef4eleves();
    }

    public function setCoef5eleves($coef5eleves)
    {
        $this->__load();
        return parent::setCoef5eleves($coef5eleves);
    }

    public function getCoef5eleves()
    {
        $this->__load();
        return parent::getCoef5eleves();
    }

    public function setCoefcyle0($coefcyle0)
    {
        $this->__load();
        return parent::setCoefcyle0($coefcyle0);
    }

    public function getCoefcyle0()
    {
        $this->__load();
        return parent::getCoefcyle0();
    }

    public function setCoefcyle1($coefcyle1)
    {
        $this->__load();
        return parent::setCoefcyle1($coefcyle1);
    }

    public function getCoefcyle1()
    {
        $this->__load();
        return parent::getCoefcyle1();
    }

    public function setCoefcyle2($coefcyle2)
    {
        $this->__load();
        return parent::setCoefcyle2($coefcyle2);
    }

    public function getCoefcyle2()
    {
        $this->__load();
        return parent::getCoefcyle2();
    }

    public function setCoefcyle3($coefcyle3)
    {
        $this->__load();
        return parent::setCoefcyle3($coefcyle3);
    }

    public function getCoefcyle3()
    {
        $this->__load();
        return parent::getCoefcyle3();
    }

    public function setMultiplicateurAdulte($multiplicateurAdulte)
    {
        $this->__load();
        return parent::setMultiplicateurAdulte($multiplicateurAdulte);
    }

    public function getMultiplicateurAdulte()
    {
        $this->__load();
        return parent::getMultiplicateurAdulte();
    }

    public function setTarifMaxCapv($tarifMaxCapv)
    {
        $this->__load();
        return parent::setTarifMaxCapv($tarifMaxCapv);
    }

    public function getTarifMaxCapv()
    {
        $this->__load();
        return parent::getTarifMaxCapv();
    }

    public function setTarifMaxHorsCapv($tarifMaxHorsCapv)
    {
        $this->__load();
        return parent::setTarifMaxHorsCapv($tarifMaxHorsCapv);
    }

    public function getTarifMaxHorsCapv()
    {
        $this->__load();
        return parent::getTarifMaxHorsCapv();
    }

    public function setTarifMax($tarifMax)
    {
        $this->__load();
        return parent::setTarifMax($tarifMax);
    }

    public function getTarifMax()
    {
        $this->__load();
        return parent::getTarifMax();
    }

    public function setSommeMax($sommeMax)
    {
        $this->__load();
        return parent::setSommeMax($sommeMax);
    }

    public function getSommeMax()
    {
        $this->__load();
        return parent::getSommeMax();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'cycle', 'formule', 'param1', 'param2', 'param3', 'param4', 'param5', 'multiplicateurAdulte', 'coefCapv', 'coefInstru2', 'coefInstru3', 'coef2eleves', 'coef3eleves', 'coef4eleves', 'coef5eleves', 'coefcyle0', 'coefcyle1', 'coefcyle2', 'coefcyle3', 'tarifMax');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}