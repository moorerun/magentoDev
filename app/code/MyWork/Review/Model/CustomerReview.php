<?php
namespace MyWork\Review\Model;

use Magento\Framework\Model\AbstractModel;

class CustomerReview extends AbstractModel
{
    protected function _construct()
    {
        $this->_init('MyWork\Review\Model\ResourceModel\CustomerReview');
    }
}
