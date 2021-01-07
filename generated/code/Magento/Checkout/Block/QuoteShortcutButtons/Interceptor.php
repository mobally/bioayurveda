<?php
namespace Magento\Checkout\Block\QuoteShortcutButtons;

/**
 * Interceptor class for @see \Magento\Checkout\Block\QuoteShortcutButtons
 */
class Interceptor extends \Magento\Checkout\Block\QuoteShortcutButtons implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Checkout\Model\Session $checkoutSession, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $checkoutSession, $data);
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
