<?php

namespace Jkirkby91\DoctrineNodeEntity;

use Jkirkby91\DoctrineRepositories\CrudRepositoryTrait;
use Psr\Http\Message\ServerRequestInterface;
use Jkirkby91\Boilers\NodeEntityBoiler\NodeContract;
use Jkirkby91\Boilers\RepositoryBoiler\CrudRepositoryContract;
use Jkirkby91\Boilers\NodeEntityBoiler\EntityContract AS Entity;

/**
 * Class NodeRepository
 *
 * @package app\Repositories\Core\Node
 * @author James Kirkby <jkirkby91@gmail.com>
 */
abstract class DoctrineNodeRepository extends \Jkirkby91\DoctrineRepositories\DoctrineRepository implements CrudRepositoryContract
{

    use CrudRepositoryTrait;
}