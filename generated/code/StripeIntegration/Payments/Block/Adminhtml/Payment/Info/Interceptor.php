<?php
namespace StripeIntegration\Payments\Block\Adminhtml\Payment\Info;

/**
 * Interceptor class for @see \StripeIntegration\Payments\Block\Adminhtml\Payment\Info
 */
class Interceptor extends \StripeIntegration\Payments\Block\Adminhtml\Payment\Info implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Payment\Gateway\ConfigInterface $config, \StripeIntegration\Payments\Helper\Generic $helper, \StripeIntegration\Payments\Model\Config $paymentsConfig, \StripeIntegration\Payments\Helper\Api $api, \Magento\Directory\Model\Country $country, \Magento\Payment\Model\Info $info, \Magento\Framework\Registry $registry, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $config, $helper, $paymentsConfig, $api, $country, $info, $registry, $data);
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
