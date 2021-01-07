<?php
namespace Eighteentech\Certificate\Model\ResourceModel;

class Certificate extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('eighteentech_certificate', 'certificate_id');
    }
}
