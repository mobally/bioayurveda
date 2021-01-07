<?php
namespace Eighteentech\Ingredient\Model\ResourceModel;

class Ingredient extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('eighteentech_ingredient', 'ingredient_id');
    }
}
