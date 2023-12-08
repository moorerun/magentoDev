<?php
namespace MyWork\Review\Model\ResourceModel\CustomerReview;

use Magento\Framework\ObjectManagerInterface;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollectionFactory;

class CollectionFactory extends AbstractCollectionFactory
{
    protected $objectManager;
    protected $instanceName;

    public function __construct(
        ObjectManagerInterface $objectManager,
        $instanceName = '\\MyWork\\Review\\Model\\ResourceModel\\CustomerReview\\Collection'
    ) {
        $this->objectManager = $objectManager;
        $this->instanceName = $instanceName;
        parent::__construct($objectManager, $instanceName);
    }
}
