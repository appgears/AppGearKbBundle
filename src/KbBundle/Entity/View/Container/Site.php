<?php

namespace AppGear\KbBundle\Entity\View\Container;

use AppGear\PlatformBundle\Entity\View\Container;
class Site extends Container
{
    
    /**
     * Relate rightSide
     */
    protected $rightSide = array();
    
    /**
     * Container
     */
    protected $container;
    
    /**
     * Get related rightSide
     */
    public function getRightSide()
    {
        if (count($this->rightSide) === 0) {
            if (property_exists($this, 'id') && !empty($this->id)) {
                $this->rightSide = $this->container->get('ag.storage')->findRelated('AppGear\\KbBundle\\Entity\\View\\Container\\Site', 'AppGear\\PlatformBundle\\Entity\\View', $this->getId(), 'rightSide');
            }
        }
        return $this->rightSide;
    }
    
    /**
     * Set rightSide
     */
    public function setRightSide($rightSide)
    {
        $this->rightSide = $rightSide;
        return $this;
    }
    public function addItemToRightSide($item)
    {
        $this->rightSide[] = $item;
        return $this;
    }
    public function __toString()
    {
        return 'Site #' . $this->id;
    }
    public function setContainer($container)
    {
        $this->container = $container;
        return $this;
    }
}