<?php

namespace Customer\Review\Model\ResourceModel\Grid;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{

    protected $_idFieldName = 'id';
   
    protected function _construct()
    {
        $this->_init(
            'Customer\Review\Model\Grid',
            'Customer\Review\Model\ResourceModel\Grid'
        );
    }
}
