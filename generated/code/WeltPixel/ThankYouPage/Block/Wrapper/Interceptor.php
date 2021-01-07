<?php
namespace WeltPixel\ThankYouPage\Block\Wrapper;

/**
 * Interceptor class for @see \WeltPixel\ThankYouPage\Block\Wrapper
 */
class Interceptor extends \WeltPixel\ThankYouPage\Block\Wrapper implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \WeltPixel\ThankYouPage\Helper\Data $helper, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $helper, $data);
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
