<?php
namespace StripeIntegration\Payments\Block\Customer\Subscriptions;

/**
 * Interceptor class for @see \StripeIntegration\Payments\Block\Customer\Subscriptions
 */
class Interceptor extends \StripeIntegration\Payments\Block\Customer\Subscriptions implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, array $data, \StripeIntegration\Payments\Model\StripeCustomer $stripeCustomer, \StripeIntegration\Payments\Helper\Generic $helper, \StripeIntegration\Payments\Helper\Subscriptions $subscriptionsHelper)
    {
        $this->___init();
        parent::__construct($context, $data, $stripeCustomer, $helper, $subscriptionsHelper);
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
