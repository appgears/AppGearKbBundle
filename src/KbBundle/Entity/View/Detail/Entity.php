<?php

namespace AppGear\KbBundle\Entity\View\Detail;

use AppGear\PlatformBundle\Entity\View\Entity\Detail;
class Entity extends Detail
{
    
    /**
     * Relate entity
     */
    protected $entity;
    
    /**
     * Container
     */
    protected $container;
    
    /**
     * Get related entity
     */
    public function getEntity()
    {
        if (count($this->entity) === 0) {
            if (property_exists($this, 'id') && !empty($this->id)) {
                $related = $this->container->get('ag.storage')->findRelated('AppGear\\KbBundle\\Entity\\View\\Detail\\Entity', 'AppGear\\KbBundle\\Entity\\Entity', $this->getId(), 'entity');
                if (count($related) > 0) {
                    $this->entity = $related[0];
                }
            }
        }
        return $this->entity;
    }
    
    /**
     * Set entity
     */
    public function setEntity($entity)
    {
        $this->entity = $entity;
        return $this;
    }
    public function __toString()
    {
        return 'Entity #' . $this->id;
    }
    public function setContainer($container)
    {
        $this->container = $container;
        return $this;
    }
}