<?php

namespace AppGear\KbBundle\Entity;

class Note
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
     * Url
     */
    protected $url;
    
    /**
     * Description
     */
    protected $description;
    
    /**
     * Category
     */
    protected $category;
    
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
    
    /**
     * Set url
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }
    
    /**
     * Get url
     */
    public function getUrl()
    {
        return $this->url;
    }
    
    /**
     * Set description
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }
    
    /**
     * Get description
     */
    public function getDescription()
    {
        return $this->description;
    }
    
    /**
     * Set category
     */
    public function setCategory($category)
    {
        $this->category = $category;
        return $this;
    }
    
    /**
     * Get category
     */
    public function getCategory()
    {
        return $this->category;
    }
    public function __toString()
    {
        return (string) $this->name;
    }
}