<?php
namespace Page\Reviews\Model;
class Post extends \Magento\Framework\Model\AbstractModel
{
	protected function _construct()
	{
		$this->_init('Page\Reviews\Model\ResourceModel\Post');
	}
}