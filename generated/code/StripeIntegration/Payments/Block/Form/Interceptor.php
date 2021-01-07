<?php
namespace StripeIntegration\Payments\Block\Form;

/**
 * Interceptor class for @see \StripeIntegration\Payments\Block\Form
 */
class Interceptor extends \StripeIntegration\Payments\Block\Form implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Payment\Model\Config $paymentConfig, \StripeIntegration\Payments\Model\Config $config, \StripeIntegration\Payments\Model\StripeCustomer $stripeCustomer, \Magento\Framework\App\ProductMetadataInterface $productMetadata, \StripeIntegration\Payments\Helper\Generic $helper, \StripeIntegration\Payments\Helper\SetupIntent $setupIntent, \Magento\Framework\Data\Form\FormKey $formKey, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $paymentConfig, $config, $stripeCustomer, $productMetadata, $helper, $setupIntent, $formKey, $data);
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
