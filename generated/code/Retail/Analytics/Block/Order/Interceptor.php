<?php
namespace Retail\Analytics\Block\Order;

/**
 * Interceptor class for @see \Retail\Analytics\Block\Order
 */
class Interceptor extends \Retail\Analytics\Block\Order implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Sales\Model\Order $order, \Magento\Sales\Model\OrderFactory $orderFactory, \Magento\Checkout\Model\Session $checkoutSession, \Magento\Catalog\Model\Product $product, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $order, $orderFactory, $checkoutSession, $product, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function toHtml()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toHtml');
        if (!$pluginInfo) {
            return parent::toHtml();
        } else {
            return $this->___callPlugins('toHtml', func_get_args(), $pluginInfo);
        }
    }
}
