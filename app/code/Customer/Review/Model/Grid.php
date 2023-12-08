<?php

namespace Customer\Review\Model;

use Customer\Review\Api\Data\GridInterface;

class Grid extends \Magento\Framework\Model\AbstractModel implements GridInterface
{
    const CACHE_TAG = 'customer_reviews';

   
    protected $_cacheTag = 'customer_reviews';

   
    protected $_eventPrefix = 'customer_reviews';

    
    protected function _construct()
    {
        $this->_init('Customer\Review\Model\ResourceModel\Grid');
    }
   
    public function getId()
    {
        return $this->getData(self::ID);
    }

    public function setId($Id)
    {
        return $this->setData(self::ID, $Id);
    }

  
    public function getCustomerEmail()
    {
        return $this->getData(self::CUSTOMER_EMAIL);
    }

    
    public function setCustomerEmail($customeremail)
    {
        return $this->setData(self::CUSTOMER_EMAIL, $customeremail);
    }

    
    public function getCustomerName()
    {
        return $this->getData(self::CUSTOMER_NAME);
    }

  
    public function setCustomerName($customername)
    {
        return $this->setData(self::CUSTOMER_NAME, $customername);
    }

 
    public function getReview()
    {
        return $this->getData(self::REVIEW);
    }
  
    public function setReview($review)
    {
        return $this->setData(self::REVIEW, $review);
    }

  
    public function getCreatedAt()
    {
        return $this->getData(self::CREATED_AT);
    }

 
    public function setCreatedAt($createdAt)
    {
        return $this->setData(self::CREATED_AT, $createdAt);
    }
    
  
    public function getUpdatedAt()
    {
        return $this->getData(self::UPDATED_AT);
    }

   
    public function setUpdatedAt($updatedAt)
    {
        return $this->setData(self::UPDATED_AT, $updatedAt);
    }
}
