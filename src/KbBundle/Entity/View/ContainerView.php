<?php

namespace AppGear\KbBundle\Entity\View;

class ContainerView extends \AppGear\AppBundle\Entity\View\ContainerView
{
    
    /**
     * Content
     */
    protected $content;
    
    /**
     * Menu
     */
    protected $menu;
    
    /**
     * Set content
     */
    public function setContent($content)
    {
        $this->content = $content;
        return $this;
    }
    
    /**
     * Get content
     */
    public function getContent()
    {
        return $this->content;
    }
    
    /**
     * Set menu
     */
    public function setMenu($menu)
    {
        $this->menu = $menu;
        return $this;
    }
    
    /**
     * Get menu
     */
    public function getMenu()
    {
        return $this->menu;
    }
}