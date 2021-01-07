<?php

namespace Meetanshi\RestrictZip\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;
use Magento\Framework\App\Helper\Context;
use Magento\Store\Model\StoreManagerInterface;

/**
 * Class Data
 * @package Meetanshi\RestrictZip\Helper
 */
class Data extends AbstractHelper
{

    const RESTRICT_ZIP_CODE_ENABLE = 'restrict_zip/general/enabled';
    const RESTRICT_ZIP_CODE_SHOW_DELIVERY_TIME = 'restrict_zip/general/show_delivery_time';
    const RESTRICT_ZIP_CODE_CHECKER_MSG = 'restrict_zip/general/checker_mag';
    const RESTRICT_ZIP_CODE_DELIVERY_AVAILABILITY_MSG = 'restrict_zip/general/delivery_availability_msg';
    const RESTRICT_ZIP_CODE_DELIVERY_UNAVAILABILITY_MSG = 'restrict_zip/general/delivery_unavailability_msg';
    const RESTRICT_ZIP_CODE_DELETE = 'restrict_zip/general/delete_zip';
    /**
     * @var StoreManagerInterface
     */
    private $storeManager;

    /**
     * Data constructor.
     * @param Context $context
     * @param StoreManagerInterface $storeManager
     */
    public function __construct(
        Context $context,
        StoreManagerInterface $storeManager
    ) {
        $this->storeManager = $storeManager;
        parent::__construct($context);
    }

    /**
     * @return mixed
     */
    public function getEnabled()
    {
        return $this->scopeConfig->getValue(
            self::RESTRICT_ZIP_CODE_ENABLE,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * @return mixed
     */
    public function getShowEstimatedTime()
    {
        return $this->scopeConfig->getValue(
            self::RESTRICT_ZIP_CODE_SHOW_DELIVERY_TIME,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * @return mixed
     */
    public function getCheckerMsg()
    {
        return $this->scopeConfig->getValue(
            self::RESTRICT_ZIP_CODE_CHECKER_MSG,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * @return mixed
     */
    public function getAvailabilityMsg()
    {
        return $this->scopeConfig->getValue(
            self::RESTRICT_ZIP_CODE_DELIVERY_AVAILABILITY_MSG,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * @return mixed
     */
    public function getUnavailabilityMsg()
    {
        return $this->scopeConfig->getValue(
            self::RESTRICT_ZIP_CODE_DELIVERY_UNAVAILABILITY_MSG,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * @return mixed
     */
    public function getDeleteZip()
    {
        return $this->scopeConfig->getValue(
            self::RESTRICT_ZIP_CODE_DELETE,
            ScopeInterface::SCOPE_STORE
        );
    }
}
