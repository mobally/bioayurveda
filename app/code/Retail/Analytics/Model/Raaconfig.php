<?php

namespace Retail\Analytics\Model;
use Magento\Framework\Model\AbstractModel;

class Raaconfig extends AbstractModel
{

	/**
	 * Initialize resource model
	 *
	 * @return void
	 */
	public function _construct()
	{
		$this->_init('Retail\Analytics\Model\ResourceModel\Raaconfig');
	}
}

