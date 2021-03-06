<?php
namespace Magento\Sales\Block\Adminhtml\Order\Creditmemo\Create\Adjustments;

/**
 * Interceptor class for @see \Magento\Sales\Block\Adminhtml\Order\Creditmemo\Create\Adjustments
 */
class Interceptor extends \Magento\Sales\Block\Adminhtml\Order\Creditmemo\Create\Adjustments implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Tax\Model\Config $taxConfig, \Magento\Framework\Pricing\PriceCurrencyInterface $priceCurrency, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $taxConfig, $priceCurrency, $data);
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
