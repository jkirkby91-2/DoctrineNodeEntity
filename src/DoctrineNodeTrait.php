<?php

namespace Jkirkby91\DoctrineNodeEntity;

/**
 * Class NodeEntityTrait
 * @package ApiArchitect\Compass\Libraries
 */
trait DoctrineNodeTrait
{
    /**
     * @ORM\PrePersist
     * @param $event
     */
    public function prePersist($event)
    {
        //@TODO Bind Node Repository to continer so dont search for service here
        $entity = $event->getEntity();
        $this->node = app()->make('em')->getRepository('ApiArchitect\Compass\Entities\Node')->create(['nodeType' => $entity->nodeType]);
        $this->setNid($this->node->getId());
    }

    /**
     * @ORM\PreUpdate
     */
    public function preUpdate()
    {
        //@TODO Bind Node Repository to continer so dont search for service here
        $this->node = $this->_em->getRepository('app\Entities\Node')->update($this->nid,[]);
    }

}