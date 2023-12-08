<?php
namespace MyWork\Review\Model\ResourceModel\CustomerReview;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected $_idFieldName = 'review_id';
    protected $_eventPrefix = 'mywork_review_customer_review_collection';

    protected function _construct()
    {
        $this->_init(
            'MyWork\Review\Model\CustomerReview',
            'MyWork\Review\Model\ResourceModel\CustomerReview'
        );
    }
}
