<?php
	declare(strict_types=1);

	namespace Jkirkby91\DoctrineNodeEntity {

		use Doctrine\{
			ORM\Mapping as ORM
		};

		use Jkirkby91\{
			DoctrineSchemas\Entities\Thing,
			Boilers\NodeEntityBoiler\EntityContract
		};

		/**
		 * Class DoctrineEntity
		 *
		 * @package Jkirkby91\DoctrineNodeEntity
		 * @author  James Kirkby <jkirkby@protonmail.ch>
		 *
		 * @ORM\MappedSuperclass
		 */
		abstract class DoctrineEntity implements EntityContract
		{

			/**
			 * @var int $id
			 *
			 * @ORM\Id
			 * @ORM\GeneratedValue
			 * @ORM\Column(type="integer", unique=true, nullable=false)
			 */
			protected $id;

			/**
			 * @var int $nid
			 *
			 * @ORM\OneToOne(targetEntity="Node", mappedBy="DoctrineEntity", fetch="LAZY")
			 * @ORM\JoinColumn(name="node_id", referencedColumnName="id")
			 * @ORM\Column(type="integer", unique=true, nullable=false)
			 */
			protected $nid;

			/**
			 * @var string $nodeType
			 * @ORM\Column(type="string", length=45, nullable=true)
			 */
			public $nodeType;

			/**
			 * getId()
			 * @return int
			 */
			public function getId() : int
			{
				return $this->id;
			}

			/**
			 * setId()
			 * @param int $id
			 *
			 * @return \Jkirkby91\DoctrineNodeEntity\DoctrineEntity
			 */
			public function setId(int $id) : DoctrineEntity
			{
				$this->id = $id;
				return $this;
			}

			/**
			 * getNid()
			 * @return int
			 */
			public function getNid() : int
			{
				return $this->nid;
			}

			/**
			 * setNid()
			 * @param int $nid
			 *
			 * @return \Jkirkby91\DoctrineNodeEntity\DoctrineEntity
			 */
			public function setNid(int $nid) : EntityContract
			{
				$this->nid = $nid;
				return $this;
			}

			/**
			 * getNodeType()
			 * @return string
			 */
			public function getNodeType() : string
			{
				return $this->nodeType;
			}

			/**
			 * setNodeType()
			 * @param string $nodeType
			 *
			 * @return \Jkirkby91\Boilers\NodeEntityBoiler\EntityContract
			 */
			public function setNodeType(string $nodeType) : EntityContract
			{
				$this->nodeType = $nodeType;
				return $this;
			}
		}
	}
