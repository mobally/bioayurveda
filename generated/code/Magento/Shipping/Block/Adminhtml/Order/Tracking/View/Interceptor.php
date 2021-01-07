<?php
namespace Magento\Shipping\Block\Adminhtml\Order\Tracking\View;

/**
 * Interceptor class for @see \Magento\Shipping\Block\Adminhtml\Order\Tracking\View
 */
class Interceptor extends \Magento\Shipping\Block\Adminhtml\Order\Tracking\View implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Shipping\Model\Config $shippingConfig, \Magento\Framework\Registry $registry, \Magento\Shipping\Model\CarrierFactory $carrierFactory, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $shippingConfig, $registry, $carrierFactory, $data);
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
