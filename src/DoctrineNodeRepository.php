<?php

namespace Jkirkby91\DoctrineNodeEntity;

/**
 * Class NodeRepository
 *
 * @package app\Repositories\Core\Node
 * @author James Kirkby <hello@jameskirkby.com>
 */
abstract class DoctrineNodeRepository extends \Jkirkby91\DoctrineRepositories\DoctrineRepository implements CrudRepositoryContract
{

    use CrudRepositoryTrait;

    /**
     * @var \Jkirkby91\Boilers\NodeBoiler\NodeContract
     */
    protected $node;

//    /**
//     * NodeRepository constructor.
//     * @param \Jkirkby91\\NodeContract $node
//     */
//    public function __construct(NodeContract $node)
//    {
//        $this->node = $node;
//    }//@TODO see how we init a new node object

    /**
     * @param array $data
     * @return Node
     */
    public function create(array $data)
    {
//        $node = new $this->node;
        $this->node->setNodeType($data['nodeType']);
        $this->node->_em->persist($this->node);
        $this->node->_em->flush();
        return $this->node;
    }

    /**
     * @param int $id
     * @param array $data
     * @return null|object
     */
    public function update($id,array $data)
    {
        $entity = $this->find($id);
        $this->_em->persist($entity);
        $this->_em->flush();
        return $entity;
    }
}