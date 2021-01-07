<?php
namespace Magento\Checkout\Block\Cart\Item\Renderer\Actions\Remove;

/**
 * Interceptor class for @see \Magento\Checkout\Block\Cart\Item\Renderer\Actions\Remove
 */
class Interceptor extends \Magento\Checkout\Block\Cart\Item\Renderer\Actions\Remove implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Checkout\Helper\Cart $cartHelper, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $cartHelper, $data);
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
