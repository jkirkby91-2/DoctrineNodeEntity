<?php
	declare(strict_types=1);

	namespace Jkirkby91\DoctrineNodeEntity {

		use Doctrine\{
			ORM\Mapping as ORM
		};

		use Gedmo\{
			Mapping\Annotation as Gedmo
		};

		use Jkirkby91\{
			Boilers\NodeEntityBoiler\NodeContract
		};

		/**
		 * Class DoctrineNode
		 *
		 * @package Jkirkby91\DoctrineNodeEntity
		 * @author  James Kirkby <jkirkby@protonmail.ch>
		 *
		 * @ORM\MappedSuperclass
		 */
		abstract class DoctrineNode implements NodeContract
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
			 * @var string $nodeType
			 *
			 * @Gedmo\Blameable(on="create")
			 * @ORM\Column(type="string", nullable=false)
			 */
			protected $nodeType;

			/**
			 * @var string $createdBy
			 *
			 * @TODO Requires vertical dependency, refactor this
			 *
			 * @Gedmo\Blameable(on="create")
			 * @ORM\ManyToOne(targetEntity="ApiArchitect\Auth\Entities\User")
			 * @ORM\JoinColumn(name="created_by", referencedColumnName="id")
			 */
			protected $createdBy;

			/**
			 * @var string $updatedBy
			 *
			 * @Gedmo\Blameable(on="update")
			 * @ORM\Column(type="string", nullable=true)
			 */
			protected $updatedBy;

			/**
			 * @var string $contentChangedBy
			 *
			 * @Gedmo\Blameable(on="change", field={"id","name","email"})
			 * @ORM\Column(name="content_changed_by", type="string", nullable=true)
			 */
			protected $contentChangedBy;

			/**
			 * @var string $createdFromIp
			 *
			 * @Gedmo\Blameable(on="create")
			 * @Gedmo\IpTraceable(on="create")
			 * @ORM\Column(type="string", length=45, nullable=true)
			 */
			protected $createdFromIp;

			/**
			 * @var string $updatedFromIp
			 *
			 * @Gedmo\IpTraceable(on="update")
			 * @ORM\Column(type="string", length=45, nullable=true)
			 */
			protected $updatedFromIp;

			/**
			 * @var /DateTime $contentChangedFromIp
			 *
			 * @Gedmo\IpTraceable(on="change", field={"name", "password", "email"})
			 * @ORM\Column(name="content_changed_by_ip", type="string", nullable=true, length=45)
			 */
			protected $contentChangedFromIp;

			/**
			 * @var /DateTime $deletedAt
			 * @ORM\Column(name="deletedAt", type="datetime", nullable=true)
			 */
			protected $deletedAt;

			/**
			 * @var /DateTime $created
			 * @ORM\Column(type="datetime", nullable=false)
			 * @Gedmo\Timestampable(on="create")
			 */
			protected $created;

			/**
			 * @var \DateTime $updated
			 *
			 * @Gedmo\Blameable(on="update")
			 * @ORM\Column(type="string", nullable=true)
			 */
			protected $updated;

			/**
			 * @var \DateTime $contentChanged
			 * @ORM\Column(name="content_changed", type="datetime", nullable=true)
			 */
			protected $contentChanged;

			/**
			 * @return int
			 */
			public function getId(): int
			{
				return $this->id;
			}

			/**
			 * @param int $id
			 *
			 * @return DoctrineNode
			 */
			public function setId(int $id): DoctrineNode
			{
				$this->id = $id;

				return $this;
			}

			/**
			 * @return string
			 */
			public function getNodeType(): string
			{
				return $this->nodeType;
			}

			/**
			 * setNodeType()
			 * @param string $nodeType
			 *
			 * @return \Jkirkby91\DoctrineNodeEntity\DoctrineNode
			 */
			public function setNodeType(string $nodeType): DoctrineNode
			{
				$this->nodeType = $nodeType;

				return $this;
			}

			/**
			 * @return string
			 */
			public function getCreatedBy(): string
			{
				return $this->createdBy;
			}

			/**
			 * @param string $createdBy
			 *
			 * @return DoctrineNode
			 */
			public function setCreatedBy(string $createdBy): DoctrineNode
			{
				$this->createdBy = $createdBy;

				return $this;
			}

			/**
			 * @return string
			 */
			public function getUpdatedBy(): string
			{
				return $this->updatedBy;
			}

			/**
			 * setUpdatedBy()
			 * @param string $updatedBy
			 *
			 * @return \Jkirkby91\DoctrineNodeEntity\DoctrineNode
			 */
			public function setUpdatedBy(string $updatedBy): DoctrineNode
			{
				$this->updatedBy = $updatedBy;

				return $this;
			}

			/**
			 * getContentChangedBy()
			 * @return string
			 */
			public function getContentChangedBy(): string
			{
				return $this->contentChangedBy;
			}

			/**
			 * setContentChangedBy()
			 * @param string $contentChangedBy
			 *
			 * @return \Jkirkby91\DoctrineNodeEntity\DoctrineNode
			 */
			public function setContentChangedBy(string $contentChangedBy): DoctrineNode
			{
				$this->contentChangedBy = $contentChangedBy;

				return $this;
			}

			/**
			 * getCreatedFromIp()
			 * @return string
			 */
			public function getCreatedFromIp(): string
			{
				return $this->createdFromIp;
			}

			/**
			 * setCreatedFromIp()
			 * @param string $createdFromIp
			 *
			 * @return \Jkirkby91\DoctrineNodeEntity\DoctrineNode
			 */
			public function setCreatedFromIp($createdFromIp): DoctrineNode
			{
				$this->createdFromIp = $createdFromIp;

				return $this;
			}

			/**
			 * getUpdatedFromIp()
			 * @return string
			 */
			public function getUpdatedFromIp(): string
			{
				return $this->updatedFromIp;
			}

			/**
			 * setUpdatedFromIp()
			 * @param string $updatedFromIp
			 *
			 * @TODO IP Entity
			 *
			 * @return \Jkirkby91\DoctrineNodeEntity\DoctrineNode
			 */
			public function setUpdatedFromIp($updatedFromIp): DoctrineNode
			{
				$this->updatedFromIp = $updatedFromIp;

				return $this;
			}

			/**
			 * @return mixed
			 */
			public function getContentChangedFromIp()
			{
				return $this->contentChangedFromIp;
			}

			/**
			 * @param mixed $contentChangedFromIp
			 *
			 * @return DoctrineNode
			 */
			public function setContentChangedFromIp($contentChangedFromIp)
			{
				$this->contentChangedFromIp = $contentChangedFromIp;

				return $this;
			}

			/**
			 * @return mixed
			 */
			public function getDeletedAt()
			{
				return $this->deletedAt;
			}

			/**
			 * setDeletedAt()
			 * @param \DateTime|null $deletedAt
			 *
			 * @return $this|mixed
			 */
			public function setDeletedAt(\DateTime $deletedAt = null)
			{
				$this->deletedAt = $deletedAt;

				return $this;
			}

			/**
			 * @return mixed
			 */
			public function getCreated()
			{
				return $this->created;
			}

			/**
			 * setCreated()
			 * @param \DateTime $created
			 *
			 * @return $this
			 */
			public function setCreated(\DateTime $created)
			{
				$this->created = $created;

				return $this;
			}

			/**
			 * getUpdated()
			 * @return \DateTime
			 */
			public function getUpdated(): \DateTime
			{
				return $this->updated;
			}

			/**
			 * setUpdated()
			 * @param \DateTime $updated
			 *
			 * @return \Jkirkby91\DoctrineNodeEntity\DoctrineNode
			 */
			public function setUpdated(\DateTime $updated): DoctrineNode
			{
				$this->updated = $updated;

				return $this;
			}

			/**
			 * getContentChanged()
			 * @return \DateTime
			 */
			public function getContentChanged(): \DateTime
			{
				return $this->contentChanged;
			}

			/**
			 * setContentChanged()
			 * @param \DateTime $contentChanged
			 *
			 * @return \Jkirkby91\DoctrineNodeEntity\DoctrineNode
			 */
			public function setContentChanged(\DateTime $contentChanged): DoctrineNode
			{
				$this->contentChanged = $contentChanged;

				return $this;
			}
		}
	}
