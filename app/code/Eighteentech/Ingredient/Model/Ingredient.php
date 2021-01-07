<?php
namespace Eighteentech\Ingredient\Model;


class Ingredient extends \Magento\Framework\Model\AbstractModel
{
   
    protected function _construct()
    {
        $this->_init('Eighteentech\Ingredient\Model\ResourceModel\Ingredient');
    }

}
