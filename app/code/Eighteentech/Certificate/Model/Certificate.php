<?php
namespace Eighteentech\Certificate\Model;


class Certificate extends \Magento\Framework\Model\AbstractModel
{
   
    protected function _construct()
    {
        $this->_init('Eighteentech\Certificate\Model\ResourceModel\Certificate');
    }

}
