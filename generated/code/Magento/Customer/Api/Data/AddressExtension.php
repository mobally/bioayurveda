<?php
namespace Magento\Customer\Api\Data;

/**
 * Extension class for @see \Magento\Customer\Api\Data\AddressInterface
 */
class AddressExtension extends \Magento\Framework\Api\AbstractSimpleObject implements AddressExtensionInterface
{
    /**
     * @return string|null
     */
    public function getBuyerGstNumber()
    {
        return $this->_get('buyer_gst_number');
    }

    /**
     * @param string $buyerGstNumber
     * @return $this
     */
    public function setBuyerGstNumber($buyerGstNumber)
    {
        $this->setData('buyer_gst_number', $buyerGstNumber);
        return $this;
    }
}
