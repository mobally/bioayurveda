<?php
namespace StripeIntegration\Payments\Block\Ach\Method;

/**
 * Interceptor class for @see \StripeIntegration\Payments\Block\Ach\Method
 */
class Interceptor extends \StripeIntegration\Payments\Block\Ach\Method implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Payment\Gateway\ConfigInterface $paymentConfig, \StripeIntegration\Payments\Helper\Generic $helper, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $paymentConfig, $helper, $data);
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
