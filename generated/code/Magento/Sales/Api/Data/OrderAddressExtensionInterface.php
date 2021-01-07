<?php
namespace Magento\Sales\Api\Data;

/**
 * ExtensionInterface class for @see \Magento\Sales\Api\Data\OrderAddressInterface
 */
interface OrderAddressExtensionInterface extends \Magento\Framework\Api\ExtensionAttributesInterface
{
    /**
     * @return string|null
     */
    public function getBuyerGstNumber();

    /**
     * @param string $buyerGstNumber
     * @return $this
     */
    public function setBuyerGstNumber($buyerGstNumber);
}
