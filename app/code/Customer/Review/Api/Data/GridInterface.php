<?php

namespace Customer\Review\Api\Data;

interface GridInterface
{

    const ID = 'id';
    const CUSTOMER_EMAIL = 'customer_email';
    const CUSTOMER_NAME = 'customer_name';
    const REVIEW = 'review';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

   
    public function getId();


    public function setId($Id);

 
    public function getCustomerEmail();

    public function setCustomerEmail($customeremail);

   
    public function getCustomerName();

 
    public function setCustomerName($customername);

  
    public function getReview();

    public function setReview($review);


    public function getCreatedAt();

    public function setCreatedAt($createdAt);

 
    public function getUpdatedAt();

 
    public function setUpdatedAt($updatedAt);

  
}
