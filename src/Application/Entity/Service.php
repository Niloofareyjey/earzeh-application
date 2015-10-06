<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Service
 */
class Service
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Blog\Entity\Service
     */
    private $parent;


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
     * Set parent
     *
     * @param \Blog\Entity\Service $parent
     * @return Service
     */
    public function setParent(\Blog\Entity\Service $parent = null)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent
     *
     * @return \Blog\Entity\Service 
     */
    public function getParent()
    {
        return $this->parent;
    }
}
