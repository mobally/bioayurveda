<?php
namespace Magento\Checkout\Api\Data;

/**
 * ExtensionInterface class for @see \Magento\Checkout\Api\Data\ShippingInformationInterface
 */
interface ShippingInformationExtensionInterface extends \Magento\Framework\Api\ExtensionAttributesInterface
{
    /**
     * @return decimal|null
     */
    public function getCgstAmount();

    /**
     * @param decimal $cgstAmount
     * @return $this
     */
    public function setCgstAmount(\decimal $cgstAmount);

    /**
     * @return decimal|null
     */
    public function getUtgstAmount();

    /**
     * @param decimal $utgstAmount
     * @return $this
     */
    public function setUtgstAmount(\decimal $utgstAmount);

    /**
     * @return decimal|null
     */
    public function getSgstAmount();

    /**
     * @param decimal $sgstAmount
     * @return $this
     */
    public function setSgstAmount(\decimal $sgstAmount);

    /**
     * @return decimal|null
     */
    public function getIgstAmount();

    /**
     * @param decimal $igstAmount
     * @return $this
     */
    public function setIgstAmount(\decimal $igstAmount);

    /**
     * @return decimal|null
     */
    public function getShippingCgstAmount();

    /**
     * @param decimal $shippingCgstAmount
     * @return $this
     */
    public function setShippingCgstAmount(\decimal $shippingCgstAmount);

    /**
     * @return decimal|null
     */
    public function getShippingUtgstAmount();

    /**
     * @param decimal $shippingUtgstAmount
     * @return $this
     */
    public function setShippingUtgstAmount(\decimal $shippingUtgstAmount);

    /**
     * @return decimal|null
     */
    public function getShippingSgstAmount();

    /**
     * @param decimal $shippingSgstAmount
     * @return $this
     */
    public function setShippingSgstAmount(\decimal $shippingSgstAmount);

    /**
     * @return decimal|null
     */
    public function getShippingIgstAmount();

    /**
     * @param decimal $shippingIgstAmount
     * @return $this
     */
    public function setShippingIgstAmount(\decimal $shippingIgstAmount);

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
