<?php
namespace MyWork\Review\Ui\Component;

use Magento\Framework\View\Element\UiComponent\DataProvider\DataProviderInterface;
use Magento\Ui\DataProvider\AbstractDataProvider;
use MyWork\Review\Model\ResourceModel\CustomerReview\CollectionFactory;

class DataProvider extends AbstractDataProvider implements DataProviderInterface
{
    protected $collection;

    public function __construct(
        $name,
        $primaryFieldName,
        $requestFieldName,
        CollectionFactory $collectionFactory,
        array $meta = [],
        array $data = []
    ) {
        $this->collection = $collectionFactory->create();
        parent::__construct($name, $primaryFieldName, $requestFieldName, $meta, $data);
    }

    public function getData()
    {
        if (!$this->getCollection()->isLoaded()) {
            $this->getCollection()->load();
        }
        return $this->getCollection()->toArray();
    }
    

    public function getMeta()
    {
        $meta = parent::getMeta();
        // Add any additional meta information as needed
        return $meta;
    }
}
