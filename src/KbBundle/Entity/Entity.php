<?php

namespace AppGear\KbBundle\Entity;

class Entity
{
    
    /**
     * Id
     */
    protected $id = '';
    
    /**
     * Name
     */
    protected $name = '';
    
    /**
     * Relate category
     */
    protected $category;
    
    /**
     * Relate image
     */
    protected $image = array();
    
    /**
     * Body
     */
    protected $body = '';
    
    /**
     * Container
     */
    protected $container;
    
    /**
     * Get id
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * Set id
     */
    public function setId($id)
    {
        $this->id = $id;
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
     * Set name
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
    
    /**
     * Get related category
     */
    public function getCategory()
    {
        if (count($this->category) === 0) {
            if (property_exists($this, 'id') && !empty($this->id)) {
                $related = $this->container->get('ag.storage')->findRelated('AppGear\\KbBundle\\Entity\\Entity', 'AppGear\\KbBundle\\Entity\\Category', $this->getId(), 'category');
                if (count($related) > 0) {
                    $this->category = $related[0];
                }
            }
        }
        return $this->category;
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
     * Get related image
     */
    public function getImage()
    {
        if (count($this->image) === 0) {
            if (property_exists($this, 'id') && !empty($this->id)) {
                $this->image = $this->container->get('ag.storage')->findRelated('AppGear\\KbBundle\\Entity\\Entity', 'AppGear\\PlatformBundle\\Entity\\Misc\\File\\Image', $this->getId(), 'image');
            }
        }
        return $this->image;
    }
    
    /**
     * Set image
     */
    public function setImage($image)
    {
        $this->image = $image;
        return $this;
    }
    
    /**
     * Get body
     */
    public function getBody()
    {
        return $this->body;
    }
    
    /**
     * Set body
     */
    public function setBody($body)
    {
        $this->body = $body;
        return $this;
    }
    public function __toString()
    {
        return (string) $this->name;
    }
    public function setContainer($container)
    {
        $this->container = $container;
        return $this;
    }
}