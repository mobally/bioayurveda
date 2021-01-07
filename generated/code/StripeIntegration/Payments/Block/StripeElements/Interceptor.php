<?php
namespace StripeIntegration\Payments\Block\StripeElements;

/**
 * Interceptor class for @see \StripeIntegration\Payments\Block\StripeElements
 */
class Interceptor extends \StripeIntegration\Payments\Block\StripeElements implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \StripeIntegration\Payments\Helper\Generic $helper, array $data = [])
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
