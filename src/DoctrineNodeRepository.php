<?php
	declare(strict_types=1);

	namespace Jkirkby91\DoctrineNodeEntity {

		use Jkirkby91\{
			Boilers\NodeEntityBoiler\NodeContract,
			DoctrineRepositories\DoctrineRepository,
			DoctrineRepositories\CrudRepositoryTrait,
			Boilers\RepositoryBoiler\CrudRepositoryContract
		};

		use Psr\{
			Http\Message\ServerRequestInterface
		};

		/**
		 * Class DoctrineNodeRepository
		 *
		 * @package Jkirkby91\DoctrineNodeEntity
		 * @author  James Kirkby <jkirkby@protonmail.ch>
		 */
		abstract class DoctrineNodeRepository extends DoctrineRepository implements CrudRepositoryContract
		{
			use CrudRepositoryTrait;
		}
	}
