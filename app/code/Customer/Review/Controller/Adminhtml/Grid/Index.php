<?php

namespace Customer\Review\Controller\Adminhtml\Grid;

class Index extends \Magento\Backend\App\Action
{
    
    private $resultPageFactory;

    
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    ) {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }

    
    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('Customer_Review::grid_list');
        $resultPage->getConfig()->getTitle()->prepend(__('Reviews'));
        return $resultPage;
    }

    
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Customer_Review::grid_list');
    }
}
