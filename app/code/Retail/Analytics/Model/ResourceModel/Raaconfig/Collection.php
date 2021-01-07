<?php

namespace Retail\Analytics\Model\ResourceModel\Raaconfig;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    /**
     * Define model & resource model
     */
    protected function _construct()
    {
        $this->_init(
            'Retail\Analytics\Model\Raaconfig',
            'Retail\Analytics\Model\ResourceModel\Raaconfig'
        );
    }
}