<?php
namespace Magento\Checkout\Api\Data;

/**
 * Extension class for @see \Magento\Checkout\Api\Data\ShippingInformationInterface
 */
class ShippingInformationExtension extends \Magento\Framework\Api\AbstractSimpleObject implements ShippingInformationExtensionInterface
{
    /**
     * @return decimal|null
     */
    public function getCgstAmount()
    {
        return $this->_get('cgst_amount');
    }

    /**
     * @param decimal $cgstAmount
     * @return $this
     */
    public function setCgstAmount(\decimal $cgstAmount)
    {
        $this->setData('cgst_amount', $cgstAmount);
        return $this;
    }

    /**
     * @return decimal|null
     */
    public function getUtgstAmount()
    {
        return $this->_get('utgst_amount');
    }

    /**
     * @param decimal $utgstAmount
     * @return $this
     */
    public function setUtgstAmount(\decimal $utgstAmount)
    {
        $this->setData('utgst_amount', $utgstAmount);
        return $this;
    }

    /**
     * @return decimal|null
     */
    public function getSgstAmount()
    {
        return $this->_get('sgst_amount');
    }

    /**
     * @param decimal $sgstAmount
     * @return $this
     */
    public function setSgstAmount(\decimal $sgstAmount)
    {
        $this->setData('sgst_amount', $sgstAmount);
        return $this;
    }

    /**
     * @return decimal|null
     */
    public function getIgstAmount()
    {
        return $this->_get('igst_amount');
    }

    /**
     * @param decimal $igstAmount
     * @return $this
     */
    public function setIgstAmount(\decimal $igstAmount)
    {
        $this->setData('igst_amount', $igstAmount);
        return $this;
    }

    /**
     * @return decimal|null
     */
    public function getShippingCgstAmount()
    {
        return $this->_get('shipping_cgst_amount');
    }

    /**
     * @param decimal $shippingCgstAmount
     * @return $this
     */
    public function setShippingCgstAmount(\decimal $shippingCgstAmount)
    {
        $this->setData('shipping_cgst_amount', $shippingCgstAmount);
        return $this;
    }

    /**
     * @return decimal|null
     */
    public function getShippingUtgstAmount()
    {
        return $this->_get('shipping_utgst_amount');
    }

    /**
     * @param decimal $shippingUtgstAmount
     * @return $this
     */
    public function setShippingUtgstAmount(\decimal $shippingUtgstAmount)
    {
        $this->setData('shipping_utgst_amount', $shippingUtgstAmount);
        return $this;
    }

    /**
     * @return decimal|null
     */
    public function getShippingSgstAmount()
    {
        return $this->_get('shipping_sgst_amount');
    }

    /**
     * @param decimal $shippingSgstAmount
     * @return $this
     */
    public function setShippingSgstAmount(\decimal $shippingSgstAmount)
    {
        $this->setData('shipping_sgst_amount', $shippingSgstAmount);
        return $this;
    }

    /**
     * @return decimal|null
     */
    public function getShippingIgstAmount()
    {
        return $this->_get('shipping_igst_amount');
    }

    /**
     * @param decimal $shippingIgstAmount
     * @return $this
     */
    public function setShippingIgstAmount(\decimal $shippingIgstAmount)
    {
        $this->setData('shipping_igst_amount', $shippingIgstAmount);
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
