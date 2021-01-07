<?php

namespace Meetanshi\RestrictZip\Model;

use Magento\Framework\Model\AbstractModel;

/**
 * Class RestrictZip
 * @package Meetanshi\RestrictZip\Model
 */
class RestrictZip extends AbstractModel
{
    protected function _construct()
    {
        $this->_init('Meetanshi\RestrictZip\Model\ResourceModel\RestrictZip');
    }
}
