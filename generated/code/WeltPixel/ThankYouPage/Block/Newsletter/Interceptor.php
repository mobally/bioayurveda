<?php
namespace WeltPixel\ThankYouPage\Block\Newsletter;

/**
 * Interceptor class for @see \WeltPixel\ThankYouPage\Block\Newsletter
 */
class Interceptor extends \WeltPixel\ThankYouPage\Block\Newsletter implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Checkout\Model\Session $checkoutSession, \Magento\Newsletter\Model\Subscriber $subscriber, \WeltPixel\ThankYouPage\Helper\Data $helper, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $checkoutSession, $subscriber, $helper, $data);
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
