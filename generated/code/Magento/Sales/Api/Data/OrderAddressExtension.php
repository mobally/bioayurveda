<?php
namespace Magento\Sales\Api\Data;

/**
 * Extension class for @see \Magento\Sales\Api\Data\OrderAddressInterface
 */
class OrderAddressExtension extends \Magento\Framework\Api\AbstractSimpleObject implements OrderAddressExtensionInterface
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
