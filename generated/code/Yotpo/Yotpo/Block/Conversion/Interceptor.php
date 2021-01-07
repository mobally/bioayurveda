<?php
namespace Yotpo\Yotpo\Block\Conversion;

/**
 * Interceptor class for @see \Yotpo\Yotpo\Block\Conversion
 */
class Interceptor extends \Yotpo\Yotpo\Block\Conversion implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Yotpo\Yotpo\Model\Config $yotpoConfig, \Magento\Checkout\Model\Session $checkoutSession, \Magento\Sales\Api\OrderRepositoryInterface $orderRepository, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $yotpoConfig, $checkoutSession, $orderRepository, $data);
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
