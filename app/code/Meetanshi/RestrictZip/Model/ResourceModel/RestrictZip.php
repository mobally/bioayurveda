<?php

namespace Meetanshi\RestrictZip\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
use Magento\Framework\Model\ResourceModel\Db\Context;

/**
 * Class RestrictZip
 * @package Meetanshi\RestrictZip\Model\ResourceModel
 */
class RestrictZip extends AbstractDb
{
    /**
     * RestrictZip constructor.
     * @param Context $context
     */
    public function __construct(
        Context $context
    ) {
        parent::__construct($context);
    }

    protected function _construct()
    {
        $this->_init('meetanshi_restrict_zip_code', 'zip_code_id');
    }
}
