<?php
namespace MyVendor\MyModule\Controller\Index;

use \Magento\Framework\App\Action\Context;
use \Magento\Framework\View\Result\PageFactory;

class Test extends \Magento\Framework\App\Action\Action
{
	protected $_pageFactory;

	public function __construct(
		Context $context,
		PageFactory $pageFactory)
	{
		$this->_pageFactory = $pageFactory;
		return parent::__construct($context);
	}

	public function execute()
	{
		$page = $this->_pageFactory->create();
		$page->getConfig()->getTitle()->set(__('Reviews'));
		return $page;
	}
}