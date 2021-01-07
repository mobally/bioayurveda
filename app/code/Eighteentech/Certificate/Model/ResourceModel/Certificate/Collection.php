<?php
/**
 * Certificate Resource Collection
 */
namespace Eighteentech\Certificate\Model\ResourceModel\Certificate;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Resource initialization
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Eighteentech\Certificate\Model\Certificate', 'Eighteentech\Certificate\Model\ResourceModel\Certificate');
    }
}
