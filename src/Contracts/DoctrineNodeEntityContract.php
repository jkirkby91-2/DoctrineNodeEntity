<?php

namespace Jkirkby91\DoctrineNodeEntity\Contracts;

/**
 * Interface DoctrineNodeEntityContract
 * @package Jkirkby91\DoctrineNodeEntity\Contracts
 */
interface DoctrineNodeEntityContract extends \Jkirkby91\Boilers\EntityBoiler\EntityContract
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