<?php

namespace Meetanshi\RestrictZip\Model\ResourceModel\RestrictZip;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

/**
 * Class Collection
 * @package Meetanshi\RestrictZip\Model\ResourceModel\RestrictZip
 */
class Collection extends AbstractCollection
{

    protected function _construct()
    {
        $this->_init('Meetanshi\RestrictZip\Model\RestrictZip', 'Meetanshi\RestrictZip\Model\ResourceModel\RestrictZip');
    }
}
