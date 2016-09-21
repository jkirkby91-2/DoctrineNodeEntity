<?php

namespace Jkirkby91\DoctrineNodeEntity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class DoctrineNodeEntity
 * @package Jkirkby91\DoctrineNodeEntity
 */
abstract class DoctrineNodeEntity extends \Jkirkby91\DoctrineNodeEntity\DoctrineEntity
{
    use \Jkirkby91\DoctrineNodeEntity\DoctrineNodeEntityTrait;
    /**
     * @var
     *
     * @ORM\OneToOne(targetEntity="Node",fetch="LAZY")
     * @ORM\JoinColumn(name="node_id", referencedColumnName="id")
     * @ORM\Column(type="integer", unique=true, nullable=false)
     */
    protected $nid;


    /**
     * @var
     * @ORM\Column(type="string", length=45, nullable=false, unique=true)
     */
    public $nodeType;

    /**
     * NodeEntity constructor.
     * @param $nodeType
     */
    public function __construct($nodeType)
    {
        $this->setNodeType($nodeType);
    }
}