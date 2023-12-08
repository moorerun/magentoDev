<?php
namespace MyWork\Review\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class CustomerReview extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('tb_customer_reviews', 'review_id');
    }
}
