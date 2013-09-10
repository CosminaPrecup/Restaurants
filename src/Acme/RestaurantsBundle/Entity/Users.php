<?php

namespace Acme\RestaurantsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Users
 */
class Users
{
    /**
     * @var string
     */
    private $usersName;

    /**
     * @var string
     */
    private $usersFirstname;

    /**
     * @var string
     */
    private $usersPassword;

    /**
     * @var integer
     */
    private $usersId;


    /**
     * Set usersName
     *
     * @param string $usersName
     * @return Users
     */
    public function setUsersName($usersName)
    {
        $this->usersName = $usersName;
    
        return $this;
    }

    /**
     * Get usersName
     *
     * @return string 
     */
    public function getUsersName()
    {
        return $this->usersName;
    }

    /**
     * Set usersFirstname
     *
     * @param string $usersFirstname
     * @return Users
     */
    public function setUsersFirstname($usersFirstname)
    {
        $this->usersFirstname = $usersFirstname;
    
        return $this;
    }

    /**
     * Get usersFirstname
     *
     * @return string 
     */
    public function getUsersFirstname()
    {
        return $this->usersFirstname;
    }

    /**
     * Set usersPassword
     *
     * @param string $usersPassword
     * @return Users
     */
    public function setUsersPassword($usersPassword)
    {
        $this->usersPassword = $usersPassword;
    
        return $this;
    }

    /**
     * Get usersPassword
     *
     * @return string 
     */
    public function getUsersPassword()
    {
        return $this->usersPassword;
    }

    /**
     * Get usersId
     *
     * @return integer 
     */
    public function getUsersId()
    {
        return $this->usersId;
    }
}
