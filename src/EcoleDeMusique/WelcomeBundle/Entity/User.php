<?php

namespace EcoleDeMusique\WelcomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
/**
 * EcoleDeMusique\WelcomeBundle\Entity\User
 */
class User implements UserInterface
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $login
     */
    private $login;

    /**
     * @var tring $mdp
     */
    private $mdp;


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
     * Set login
     *
     * @param string $login
     * @return User
     */
    public function setLogin($login)
    {
        $this->login = $login;
    
        return $this;
    }

    /**
     * Get login
     *
     * @return string 
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set mdp
     *
     * @param String $mdp
     * @return User
     */
    public function setMdp($mdp)
    {
        $this->mdp = $mdp;
    
        return $this;
    }

    /**
     * Get mdp
     *
     * @return tring 
     */
    public function getMdp()
    {
        return $this->mdp;
    }
    /**
     * @var string $role
     */
    private $role;


    /**
     * Set role
     *
     * @param string $role
     * @return User
     */
    public function setRole($role)
    {
        $this->role = $role;
    
        return $this;
    }

    /**
     * Get role
     *
     * @return string 
     */
    public function getRole()
    {
        return $this->role;
    }
    
    
    
    
    
    public function getRoles()
    {
        if($this->getRole()=="ROLE_SUPER_ADMIN")
        {    
            return array('ROLE_SUPER_ADMIN'); // sinon le rôle USER
        }
         else 
         {
            return array('ROLE_ADMIN');
         }
    }
    
      public function getPassword() {
        return $this->getMdp();
    }
    
    
        public function getSalt() {
        return null;
    }

    
    
    
      public function getUsername() {
        return  $this->getLogin();
    }
    
    
        public function eraseCredentials() { 
    }
    
}