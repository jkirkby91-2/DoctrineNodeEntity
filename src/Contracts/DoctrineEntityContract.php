<?php

namespace Jkirkby91\DoctrineNodeEntity\Contracts;

/**
 * Interface DoctrineNodeEntityContract
 * @package Jkirkby91\DoctrineNodeEntity\Contracts
 */
interface DoctrineEntityContract extends \Jkirkby91\Boilers\NodeEntityBoiler\EntityContract
{
    /**
     * @ORM\PrePersist
     * @param $event
     */
    public function prePersist($event);

    /**
     * @ORM\PreUpdate
     */
    public function preUpdate();

}