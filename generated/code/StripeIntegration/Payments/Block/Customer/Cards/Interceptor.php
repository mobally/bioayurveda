<?php
namespace StripeIntegration\Payments\Block\Customer\Cards;

/**
 * Interceptor class for @see \StripeIntegration\Payments\Block\Customer\Cards
 */
class Interceptor extends \StripeIntegration\Payments\Block\Customer\Cards implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, array $data, \StripeIntegration\Payments\Model\StripeCustomer $stripeCustomer, \StripeIntegration\Payments\Helper\Generic $helper, \Magento\Payment\Block\Form\Cc $ccBlock, \StripeIntegration\Payments\Model\Config $config)
    {
        $this->___init();
        parent::__construct($context, $data, $stripeCustomer, $helper, $ccBlock, $config);
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
