<?php

namespace Jkirkby91\DoctrineNodeEntity;

/**
 * Class AbstractRepository
 * @package Jkirkby91\RepositoryBoiler\Repositories
 */
abstract class DoctrineEntityRepository extends \Jkirkby91\DoctrineRepositories\DoctrineRepository implements \Jkirkby91\Boilers\RepositoryBoiler\ResourceRepositoryContract
{

    /**
     * @param $paginate
     * @return mixed
     */
    public function paginatedQuery($paginate)
    {
        return $this->paginate($paginate,25);
    }
}