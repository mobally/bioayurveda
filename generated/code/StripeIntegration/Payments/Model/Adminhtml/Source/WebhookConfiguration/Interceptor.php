<?php
namespace StripeIntegration\Payments\Model\Adminhtml\Source\WebhookConfiguration;

/**
 * Interceptor class for @see \StripeIntegration\Payments\Model\Adminhtml\Source\WebhookConfiguration
 */
class Interceptor extends \StripeIntegration\Payments\Model\Adminhtml\Source\WebhookConfiguration implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \StripeIntegration\Payments\Helper\WebhooksSetup $webhooksSetup, \StripeIntegration\Payments\Model\Config $config, \Magento\Framework\App\Request\Http $request, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $webhooksSetup, $config, $request, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function render(\Magento\Framework\Data\Form\Element\AbstractElement $element)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'render');
        if (!$pluginInfo) {
            return parent::render($element);
        } else {
            return $this->___callPlugins('render', func_get_args(), $pluginInfo);
        }
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
