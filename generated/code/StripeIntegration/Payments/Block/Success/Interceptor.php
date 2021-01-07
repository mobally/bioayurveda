<?php
namespace StripeIntegration\Payments\Block\Success;

/**
 * Interceptor class for @see \StripeIntegration\Payments\Block\Success
 */
class Interceptor extends \StripeIntegration\Payments\Block\Success implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Checkout\Model\Session $checkoutSession, \Magento\Sales\Model\Order\Config $orderConfig, \StripeIntegration\Payments\Model\Ui\ConfigProvider $configProvider, \Magento\Framework\App\Http\Context $httpContext, \Magento\Framework\Pricing\Helper\Data $pricingHelper, \Magento\Checkout\Helper\Data $checkoutHelper, \StripeIntegration\Payments\Helper\Generic $paymentsHelper, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $checkoutSession, $orderConfig, $configProvider, $httpContext, $pricingHelper, $checkoutHelper, $paymentsHelper, $data);
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
