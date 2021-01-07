<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Eighteentech\Delegatedac\Model;

use Magento\Customer\Api\AddressMetadataInterface;
use Magento\Customer\Api\Data\AddressInterface;

/**
 * Customer address model
 *
 * @api
 * @method int getParentId() getParentId()
 * @method \Magento\Customer\Model\Address setParentId() setParentId(int $parentId)
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 * @since 100.0.2
 */
class Address extends \Magento\Customer\Model\Address
{
   
    public function updateData(AddressInterface $address)
    {
        // Set all attributes
        $attributes = $this->dataProcessor
            ->buildOutputDataArray($address, \Magento\Customer\Api\Data\AddressInterface::class);

        foreach ($attributes as $attributeCode => $attributeData) {
            if (AddressInterface::REGION === $attributeCode) {
                $this->setRegion($address->getRegion()->getRegion());
                $this->setRegionCode($address->getRegion()->getRegionCode());
                $this->setRegionId($address->getRegion()->getRegionId());
            } else {
                $this->setDataUsingMethod($attributeCode, $attributeData);
            }
        }
        // Need to explicitly set this due to discrepancy in the keys between model and data object
        $this->setIsDefaultBilling($address->isDefaultBilling());
        $this->setIsDefaultShipping($address->isDefaultShipping());
        $customAttributes = $address->getCustomAttributes();

   

        if ($customAttributes !== null) {
            foreach ($customAttributes as $attribute) {
                if (!empty($attribute)) {
                $this->setData($attribute->getAttributeCode(), $attribute->getValue());
                  }
            }
        }

        return $this;
    }

   
}
