<?php

namespace Jkirkby91\DoctrineNodeEntity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class AbstractNode
 *
 * @package app\Entities
 * @author James Kirkby <hello@jameskirkby.com>
 *
 * @ORM\MappedSuperclass
 * @ORM\HasLifecycleCallbacks()
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
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
}