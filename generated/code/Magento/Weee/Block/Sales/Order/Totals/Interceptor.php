<?php
namespace Magento\Weee\Block\Sales\Order\Totals;

/**
 * Interceptor class for @see \Magento\Weee\Block\Sales\Order\Totals
 */
class Interceptor extends \Magento\Weee\Block\Sales\Order\Totals implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Weee\Helper\Data $weeeData, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $weeeData, $data);
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
