<?php

namespace AppGear\KbBundle\Entity;

class Category
{
    
    /**
     * Id
     */
    protected $id;
    
    /**
     * Name
     */
    protected $name;
    
    /**
     * Set id
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
    
    /**
     * Get id
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * Set name
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
    
    /**
     * Get name
     */
    public function getName()
    {
        return $this->name;
    }
    public function __toString()
    {
        return (string) $this->name;
    }
}