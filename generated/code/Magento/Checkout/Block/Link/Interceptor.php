<?php
namespace Magento\Checkout\Block\Link;

/**
 * Interceptor class for @see \Magento\Checkout\Block\Link
 */
class Interceptor extends \Magento\Checkout\Block\Link implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Framework\Module\Manager $moduleManager, \Magento\Checkout\Helper\Data $checkoutHelper, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $moduleManager, $checkoutHelper, $data);
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
