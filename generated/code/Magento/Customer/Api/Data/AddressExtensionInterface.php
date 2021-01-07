<?php
namespace Magento\Customer\Api\Data;

/**
 * ExtensionInterface class for @see \Magento\Customer\Api\Data\AddressInterface
 */
interface AddressExtensionInterface extends \Magento\Framework\Api\ExtensionAttributesInterface
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
