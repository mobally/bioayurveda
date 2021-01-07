<?php
namespace StripeIntegration\Payments\Block\Ach\Verification;

/**
 * Interceptor class for @see \StripeIntegration\Payments\Block\Ach\Verification
 */
class Interceptor extends \StripeIntegration\Payments\Block\Ach\Verification implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \StripeIntegration\Payments\Helper\Generic $helper, \StripeIntegration\Payments\Model\StripeCustomer $stripeCustomer, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $helper, $stripeCustomer, $data);
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
