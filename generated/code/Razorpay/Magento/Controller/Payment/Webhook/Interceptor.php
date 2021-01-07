<?php
namespace Razorpay\Magento\Controller\Payment\Webhook;

/**
 * Interceptor class for @see \Razorpay\Magento\Controller\Payment\Webhook
 */
class Interceptor extends \Razorpay\Magento\Controller\Payment\Webhook implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Customer\Model\Session $customerSession, \Magento\Checkout\Model\Session $checkoutSession, \Razorpay\Magento\Model\CheckoutFactory $checkoutFactory, \Razorpay\Magento\Model\Config $config, \Magento\Catalog\Model\Session $catalogSession, \Magento\Quote\Model\QuoteRepository $quoteRepository, \Magento\Sales\Api\Data\OrderInterface $order, \Magento\Quote\Model\QuoteManagement $quoteManagement, \Magento\Store\Model\StoreManagerInterface $storeManagement, \Magento\Customer\Api\CustomerRepositoryInterface $customerRepository, \Magento\Framework\App\CacheInterface $cache, \Magento\Framework\Event\ManagerInterface $eventManager, \Psr\Log\LoggerInterface $logger, \Razorpay\Magento\Model\LogHandler $handler)
    {
        $this->___init();
        parent::__construct($context, $customerSession, $checkoutSession, $checkoutFactory, $config, $catalogSession, $quoteRepository, $order, $quoteManagement, $storeManagement, $customerRepository, $cache, $eventManager, $logger, $handler);
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
