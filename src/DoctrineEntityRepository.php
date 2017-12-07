<?php
	declare(strict_types=1);

	namespace Jkirkby91\DoctrineNodeEntity {

		use Jkirkby91\{
			Boilers\RepositoryBoiler\ResourceRepositoryContract,
			DoctrineRepositories\DoctrineRepository
		};

		/**
		 * Class DoctrineEntityRepository
		 *
		 * @package Jkirkby91\DoctrineNodeEntity
		 * @author  James Kirkby <jkirkby@protonmail.ch>
		 */
		abstract class DoctrineEntityRepository extends DoctrineRepository implements ResourceRepositoryContract
		{

			/**
			 * paginatedQuery()
			 * @param $paginate
			 *
			 * @return mixed
			 */
			public function paginatedQuery($paginate)
			{
				return $this->paginate($paginate,25);
			}
		}
	}