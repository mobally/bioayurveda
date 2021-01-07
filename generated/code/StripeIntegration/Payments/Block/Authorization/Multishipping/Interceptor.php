<?php
namespace StripeIntegration\Payments\Block\Authorization\Multishipping;

/**
 * Interceptor class for @see \StripeIntegration\Payments\Block\Authorization\Multishipping
 */
class Interceptor extends \StripeIntegration\Payments\Block\Authorization\Multishipping implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Customer\Model\Session $customerSession, \Magento\Framework\Session\Generic $session, \StripeIntegration\Payments\Helper\Generic $helper, \StripeIntegration\Payments\Helper\Multishipping $multishippingHelper, \StripeIntegration\Payments\Model\Config $config, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $customerSession, $session, $helper, $multishippingHelper, $config, $data);
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
