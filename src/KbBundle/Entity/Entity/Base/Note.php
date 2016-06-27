<?php

namespace AppGear\KbBundle\Entity\Entity\Base;

use AppGear\KbBundle\Entity\Entity;
class Note extends Entity
{
    
    /**
     * Url
     */
    protected $url = '';
    
    /**
     * Get url
     */
    public function getUrl()
    {
        return $this->url;
    }
    
    /**
     * Set url
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }
    public function __toString()
    {
        return (string) $this->name;
    }
}