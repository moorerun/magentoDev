<?php
namespace Page\Reviews\Model\ResourceModel\Post;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
	/**
	 * Define resource model
	 *
	 * @return void
	 */
	protected function _construct()
	{
		$this->_init('Page\Reviews\Model\Post', 'Page\Reviews\Model\ResourceModel\Post');
	}

}