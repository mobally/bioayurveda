<?php
namespace StripeIntegration\Payments\Block\SepaCreditInfo;

/**
 * Interceptor class for @see \StripeIntegration\Payments\Block\SepaCreditInfo
 */
class Interceptor extends \StripeIntegration\Payments\Block\SepaCreditInfo implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Payment\Gateway\ConfigInterface $config, \Magento\Framework\Pricing\Helper\Data $pricingHelper, \StripeIntegration\Payments\Helper\Generic $paymentsHelper, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $config, $pricingHelper, $paymentsHelper, $data);
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
