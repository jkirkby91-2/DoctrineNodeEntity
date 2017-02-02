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

    /**
     * @param array $criteria
     * @param int $page
     * @return LengthAwarePaginator
     * @throws \Exception
     */
    public function paginatedFind(array $criteria = [],$page = 1)
    {
        try {
            $resource = new ArrayCollection($this->findBy($criteria,[]));
            return new LengthAwarePaginator($resource->forPage($page,config('app.paging.default_limit')),$resource->count(),2);
        } catch (ORMException $e){
            $this->resetClosedEntityManager();
            throw new \Exception($e);
        }
    }

}