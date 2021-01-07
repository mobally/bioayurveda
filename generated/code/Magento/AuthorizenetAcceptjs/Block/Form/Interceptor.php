<?php
namespace Magento\AuthorizenetAcceptjs\Block\Form;

/**
 * Interceptor class for @see \Magento\AuthorizenetAcceptjs\Block\Form
 */
class Interceptor extends \Magento\AuthorizenetAcceptjs\Block\Form implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Payment\Model\Config $paymentConfig, \Magento\AuthorizenetAcceptjs\Gateway\Config $config, \Magento\Backend\Model\Session\Quote $sessionQuote, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $paymentConfig, $config, $sessionQuote, $data);
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
