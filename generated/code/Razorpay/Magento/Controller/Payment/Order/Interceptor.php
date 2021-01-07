<?php
namespace Razorpay\Magento\Controller\Payment\Order;

/**
 * Interceptor class for @see \Razorpay\Magento\Controller\Payment\Order
 */
class Interceptor extends \Razorpay\Magento\Controller\Payment\Order implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Customer\Model\Session $customerSession, \Magento\Checkout\Model\Session $checkoutSession, \Razorpay\Magento\Model\Config $config, \Magento\Catalog\Model\Session $catalogSession, \Magento\Quote\Api\CartManagementInterface $cartManagement, \Razorpay\Magento\Model\CheckoutFactory $checkoutFactory, \Magento\Framework\App\CacheInterface $cache, \Magento\Sales\Api\OrderRepositoryInterface $orderRepository, \Psr\Log\LoggerInterface $logger, \Razorpay\Magento\Model\LogHandler $handler)
    {
        $this->___init();
        parent::__construct($context, $customerSession, $checkoutSession, $config, $catalogSession, $cartManagement, $checkoutFactory, $cache, $orderRepository, $logger, $handler);
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        if (!$pluginInfo) {
            return parent::dispatch($request);
        } else {
            return $this->___callPlugins('dispatch', func_get_args(), $pluginInfo);
        }
    }
}
