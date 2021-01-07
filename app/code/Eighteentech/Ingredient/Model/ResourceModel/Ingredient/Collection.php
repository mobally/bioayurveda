<?php
/**
 * Ingredient Resource Collection
 */
namespace Eighteentech\Ingredient\Model\ResourceModel\Ingredient;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Resource initialization
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Eighteentech\Ingredient\Model\Ingredient', 'Eighteentech\Ingredient\Model\ResourceModel\Ingredient');
    }
}
