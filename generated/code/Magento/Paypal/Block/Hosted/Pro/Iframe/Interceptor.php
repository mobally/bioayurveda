<?php
namespace Magento\Paypal\Block\Hosted\Pro\Iframe;

/**
 * Interceptor class for @see \Magento\Paypal\Block\Hosted\Pro\Iframe
 */
class Interceptor extends \Magento\Paypal\Block\Hosted\Pro\Iframe implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Sales\Model\OrderFactory $orderFactory, \Magento\Checkout\Model\Session $checkoutSession, \Magento\Paypal\Helper\Hss $hssHelper, \Magento\Framework\Filesystem\Directory\ReadFactory $readFactory, \Magento\Framework\Module\Dir\Reader $reader, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $orderFactory, $checkoutSession, $hssHelper, $readFactory, $reader, $data);
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
