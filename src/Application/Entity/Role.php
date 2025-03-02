<?php

namespace Application\Entity;
    use Doctrine\ORM\Mapping as ORM;
    
    /**
     * Role
     *
     * @ORM\Table(name="role")
     * @ORM\Entity
     */
    class Role
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
         * @var string
         *
         * @ORM\Column(name="name", type="string", length=50, nullable=true)
         */
        private $name;
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
     * Set name
     *
     * @param string $name
     * @return Role
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
}
