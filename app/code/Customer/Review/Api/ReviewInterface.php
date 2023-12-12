<?php

namespace Customer\Review\Api;

interface ReviewInterface
{
        /**
     * GET for Post api
     * @api
     * @param
     * @return \Customer\Review\Api\ReviewInterface
     */
    public function getReviews();

    /**
     * POST for Post api
     * @api
     * @param string $customeremail
     * @param string $customername
     * @param string $review
     * @return \Customer\Review\Api\ReviewInterface
     */
    public function createReview($customeremail,$customername,$review);

    /**
     * PUT for Post api
     * @api
     * @param int $id
     * @param string $customername
     * @return \Customer\Review\Api\ReviewInterface
     */
    public function updateReview($id, $customername);
}