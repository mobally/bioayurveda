<?php
namespace StripeIntegration\Payments\Block\Button;

/**
 * Interceptor class for @see \StripeIntegration\Payments\Block\Button
 */
class Interceptor extends \StripeIntegration\Payments\Block\Button implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Pricing\PriceCurrencyInterface $priceCurrency, \StripeIntegration\Payments\Model\Config $config, \StripeIntegration\Payments\Helper\Generic $paymentsHelper, \StripeIntegration\Payments\Helper\ExpressHelper $expressHelper, \Magento\Checkout\Helper\Data $checkoutHelper, \Magento\Tax\Helper\Data $taxHelper, \Magento\Framework\Locale\Resolver $localeResolver, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $priceCurrency, $config, $paymentsHelper, $expressHelper, $checkoutHelper, $taxHelper, $localeResolver, $data);
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
