<?php

namespace Customer\Review\Model\Api;

use \Customer\Review\Model\GridFactory;

class Review implements \Customer\Review\Api\ReviewInterface {

    protected $_reviewApiFactory;

    public function __construct(
        GridFactory $reviewApiFactory
    ) {
        $this->_reviewApiFactory = $reviewApiFactory;
    }

    public function getReviews(){
        $reviewItems = array();

        $reviewsFactory = $this->_reviewApiFactory->create();

        try {
            $collection = $reviewsFactory->getCollection();
            foreach($collection as $item){
                array_push($reviewItems,$item->getData());
            }
            $response =  ["code" => 200, "message" => "Success", "data" => $reviewItems];
        } catch (\Exception $e) {
            $response = $e->getMessage();
        }

        return $response; 
    }

    public function createReview($customeremail,$customername,$review){
        $reviewsFactory = $this->_reviewApiFactory->create();

        try {
            $reviewsFactory->setCustomerEmail($customeremail);
            $reviewsFactory->setCustomerName($customername);
            $reviewsFactory->setReview($review);
            $reviewsFactory->save();
        
            $response = ["code" => 201, "message" => "Review created successfully"];
        } catch (\Exception $e) {
            $response = $e->getMessage();
        }
        
        return $response; 
    }

    public function updateReview($id, $customername){
        $reviewsFactory = $this->_reviewApiFactory->create();

        try {
            $reviewsFactory->load($id);

            if($reviewsFactory->getId() == null){
                $response = ["code" => 404, "message" => "Review not found"];
            }

            $reviewsFactory->setCustomerName($customername);
            $reviewsFactory->save();
        
            $response = ["code" => 200, "message" => "Review updated successfully"];
        } catch (\Exception $e) {
            $response = $e->getMessage();
        }
        
        return $response;
    }
}