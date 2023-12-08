<?php

namespace Customer\Review\Block;

use Magento\Framework\View\Element\Template;
use Magento\Backend\Block\Template\Context;
use Customer\Review\Model\ResourceModel\Grid\CollectionFactory;

class Showdata extends Template
{

    public $collection;

    public function __construct(Context $context, CollectionFactory $collectionFactory, array $data = [])
    {
        $this->collection = $collectionFactory;
        parent::__construct($context, $data);
    }

    public function getCollection()
    {
        return $this->collection->create();
    }

    public function _prepareLayout()
{
	// add breadcrumbs Home > Reviews
    $breadcrumbs = $this->getLayout()->getBlock('breadcrumbs');
    $breadcrumbs->addCrumb(
        'home',
        [
            'label' => __('Home'),
            'title' => __('Home'),
            'link' => $this->_storeManager->getStore()->getBaseUrl()
        ]
    );
    $breadcrumbs->addCrumb(
        'reviews',
        [
            'label' => __('Reviews'),
            'title' => __('Reviews')
        ]
    );
    
	return parent::_prepareLayout();
}

}