<?php
namespace Magento\Multishipping\Block\Checkout\State;

/**
 * Interceptor class for @see \Magento\Multishipping\Block\Checkout\State
 */
class Interceptor extends \Magento\Multishipping\Block\Checkout\State implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Multishipping\Model\Checkout\Type\Multishipping\State $multishippingState, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $multishippingState, $data);
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
