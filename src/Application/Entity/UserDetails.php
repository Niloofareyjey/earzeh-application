<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserDetails
 */
class UserDetails
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $documents;

    /**
     * @var string
     */
    private $info;

    /**
     * @var boolean
     */
    private $active;

    /**
     * @var string
     */
    private $phone;

    /**
     * @var string
     */
    private $ticketManager;

    /**
     * @var \Blog\Entity\User
     */
    private $user;


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
     * Set documents
     *
     * @param string $documents
     * @return UserDetails
     */
    public function setDocuments($documents)
    {
        $this->documents = $documents;

        return $this;
    }

    /**
     * Get documents
     *
     * @return string 
     */
    public function getDocuments()
    {
        return $this->documents;
    }

    /**
     * Set info
     *
     * @param string $info
     * @return UserDetails
     */
    public function setInfo($info)
    {
        $this->info = $info;

        return $this;
    }

    /**
     * Get info
     *
     * @return string 
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @return UserDetails
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return boolean 
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return UserDetails
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string 
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set ticketManager
     *
     * @param string $ticketManager
     * @return UserDetails
     */
    public function setTicketManager($ticketManager)
    {
        $this->ticketManager = $ticketManager;

        return $this;
    }

    /**
     * Get ticketManager
     *
     * @return string 
     */
    public function getTicketManager()
    {
        return $this->ticketManager;
    }

    /**
     * Set user
     *
     * @param \Blog\Entity\User $user
     * @return UserDetails
     */
    public function setUser(\Blog\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Blog\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
}
