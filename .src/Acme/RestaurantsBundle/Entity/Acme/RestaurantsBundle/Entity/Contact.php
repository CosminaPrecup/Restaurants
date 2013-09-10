<?php

namespace Acme\RestaurantsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contact
 */
class Contact
{
    /**
     * @var string
     */
    private $contactName;

    /**
     * @var string
     */
    private $contactEmail;

    /**
     * @var string
     */
    private $conatctSubject;

    /**
     * @var string
     */
    private $contactBody;

    /**
     * @var integer
     */
    private $contactId;


    /**
     * Set contactName
     *
     * @param string $contactName
     * @return Contact
     */
    public function setContactName($contactName)
    {
        $this->contactName = $contactName;
    
        return $this;
    }

    /**
     * Get contactName
     *
     * @return string 
     */
    public function getContactName()
    {
        return $this->contactName;
    }

    /**
     * Set contactEmail
     *
     * @param string $contactEmail
     * @return Contact
     */
    public function setContactEmail($contactEmail)
    {
        $this->contactEmail = $contactEmail;
    
        return $this;
    }

    /**
     * Get contactEmail
     *
     * @return string 
     */
    public function getContactEmail()
    {
        return $this->contactEmail;
    }

    /**
     * Set conatctSubject
     *
     * @param string $conatctSubject
     * @return Contact
     */
    public function setConatctSubject($conatctSubject)
    {
        $this->conatctSubject = $conatctSubject;
    
        return $this;
    }

    /**
     * Get conatctSubject
     *
     * @return string 
     */
    public function getConatctSubject()
    {
        return $this->conatctSubject;
    }

    /**
     * Set contactBody
     *
     * @param string $contactBody
     * @return Contact
     */
    public function setContactBody($contactBody)
    {
        $this->contactBody = $contactBody;
    
        return $this;
    }

    /**
     * Get contactBody
     *
     * @return string 
     */
    public function getContactBody()
    {
        return $this->contactBody;
    }

    /**
     * Get contactId
     *
     * @return integer 
     */
    public function getContactId()
    {
        return $this->contactId;
    }
}
