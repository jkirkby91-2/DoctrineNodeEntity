<?php

namespace Jkirkby91\DoctrineNodeEntity;

/**
 * Class NodeEntityTrait
 * @package ApiArchitect\Compass\Libraries
 */
trait DoctrineNodeEntityTrait
{

    /**
     * @return mixed
     */
    public function getNid()
    {
        return $this->nid;
    }

    /**
     * @param $nid
     * @return $this
     */
    public function setNid($nid)
    {
        $this->nid = $nid;
        return $this;
    }

    /**
     * @return string
     */
    public function getNodeType()
    {
        return $this->nodeType;
    }

    /**
     * @param $nodeType
     * @return $this
     */
    public function setNodeType($nodeType)
    {
        $this->nodeType = $nodeType;
        return $this;
    }

}