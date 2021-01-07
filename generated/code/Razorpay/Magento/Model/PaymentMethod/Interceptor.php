<?php
namespace Razorpay\Magento\Model\PaymentMethod;

/**
 * Interceptor class for @see \Razorpay\Magento\Model\PaymentMethod
 */
class Interceptor extends \Razorpay\Magento\Model\PaymentMethod implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Api\ExtensionAttributesFactory $extensionFactory, \Magento\Framework\Api\AttributeValueFactory $customAttributeFactory, \Magento\Payment\Helper\Data $paymentData, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Payment\Model\Method\Logger $logger, \Razorpay\Magento\Model\Config $config, \Magento\Framework\App\RequestInterface $request, \Magento\Sales\Model\ResourceModel\Order\Payment\Transaction\CollectionFactory $salesTransactionCollectionFactory, \Magento\Framework\App\ProductMetadataInterface $productMetaData, \Magento\Directory\Model\RegionFactory $regionFactory, \Magento\Sales\Api\OrderRepositoryInterface $orderRepository, \Razorpay\Magento\Controller\Payment\Order $order, ?\Magento\Framework\Model\ResourceModel\AbstractResource $resource = null, ?\Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $extensionFactory, $customAttributeFactory, $paymentData, $scopeConfig, $logger, $config, $request, $salesTransactionCollectionFactory, $productMetaData, $regionFactory, $orderRepository, $order, $resource, $resourceCollection, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function denyPayment(\Magento\Payment\Model\InfoInterface $payment)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'denyPayment');
        if (!$pluginInfo) {
            return parent::denyPayment($payment);
        } else {
            return $this->___callPlugins('denyPayment', func_get_args(), $pluginInfo);
        }
    }
}
