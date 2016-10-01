<?php

namespace Jkirkby91\DoctrineNodeEntity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class AbstractNode
 *
 * @package app\Entities
 * @author James Kirkby <jkirkby91@gmail.com>
 * @ORM\MappedSuperclass
 */
abstract class DoctrineEntity implements \Jkirkby91\Boilers\NodeEntityBoiler\EntityContract
{

    /**
     * @var
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer", unique=true, nullable=false)
     */
    protected $id;

    /**
     * @var
     *
     * @ORM\OneToOne(targetEntity="Node",fetch="EXTRA_LAZY")
     * @ORM\JoinColumn(name="node_id", referencedColumnName="id")
     * @ORM\Column(type="integer", unique=true, nullable=false)
     */
    protected $nid;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    public $nodeType;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

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
     * @return mixed
     */
    public function getNodeType()
    {
        return $this->nodeType;
    }

    /**
     * @param mixed $nodeType
     * @return DoctrineEntity
     */
    public function setNodeType($nodeType)
    {
        $this->nodeType = $nodeType;
        return $this;
    }

}