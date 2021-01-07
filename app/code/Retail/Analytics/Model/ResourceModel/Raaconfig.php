<?php

namespace Retail\Analytics\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Raaconfig extends AbstractDb
{
    /**
     * Define main table
     */
	
	public function __construct(
			\Magento\Framework\Model\ResourceModel\Db\Context $context
	)
	{
		parent::__construct($context);
	}
	
    protected function _construct()
    {
        $this->_init('raa_config', 'id');
    }
}