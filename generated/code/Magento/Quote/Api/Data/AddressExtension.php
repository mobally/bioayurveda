<?php
namespace Magento\Quote\Api\Data;

/**
 * Extension class for @see \Magento\Quote\Api\Data\AddressInterface
 */
class AddressExtension extends \Magento\Framework\Api\AbstractSimpleObject implements AddressExtensionInterface
{
    /**
     * @return \Magento\SalesRule\Api\Data\RuleDiscountInterface[]|null
     */
    public function getDiscounts()
    {
        return $this->_get('discounts');
    }

    /**
     * @param \Magento\SalesRule\Api\Data\RuleDiscountInterface[] $discounts
     * @return $this
     */
    public function setDiscounts($discounts)
    {
        $this->setData('discounts', $discounts);
        return $this;
    }

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
