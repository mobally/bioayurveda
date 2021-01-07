<?php
namespace Magento\Checkout\Block\Cart\Shipping;

/**
 * Interceptor class for @see \Magento\Checkout\Block\Cart\Shipping
 */
class Interceptor extends \Magento\Checkout\Block\Cart\Shipping implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Customer\Model\Session $customerSession, \Magento\Checkout\Model\Session $checkoutSession, \Magento\Checkout\Model\CompositeConfigProvider $configProvider, array $layoutProcessors = [], array $data = [], ?\Magento\Framework\Serialize\Serializer\Json $serializer = null)
    {
        $this->___init();
        parent::__construct($context, $customerSession, $checkoutSession, $configProvider, $layoutProcessors, $data, $serializer);
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
