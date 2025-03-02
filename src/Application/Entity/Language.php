<?php

namespace Application\Entity;
        
        
        
        use Doctrine\ORM\Mapping as ORM;
        
        /**
         * Language
         *
         * @ORM\Table(name="language")
         * @ORM\Entity
         */
        class Language
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
             * @ORM\Column(name="name", type="string", length=50, nullable=false)
             */
            private $name;
            
            /**
             * @var string
             *
             * @ORM\Column(name="attribute", type="text", nullable=true)
             */
            private $attribute;

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
     * @return Language
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
     * Set attribute
     *
     * @param string $attribute
     * @return Language
     */
    public function setAttribute($attribute)
    {
        $this->attribute = $attribute;

        return $this;
    }

    /**
     * Get attribute
     *
     * @return string 
     */
    public function getAttribute()
    {
        return $this->attribute;
    }
}
