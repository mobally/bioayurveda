<?php
namespace Magento\Tax\Block\Sales\Order\Tax;

/**
 * Interceptor class for @see \Magento\Tax\Block\Sales\Order\Tax
 */
class Interceptor extends \Magento\Tax\Block\Sales\Order\Tax implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Tax\Model\Config $taxConfig, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $taxConfig, $data);
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
