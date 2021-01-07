<?php
namespace Magento\Authorizenet\Block\Adminhtml\Order\View\Info\PaymentDetails;

/**
 * Interceptor class for @see \Magento\Authorizenet\Block\Adminhtml\Order\View\Info\PaymentDetails
 */
class Interceptor extends \Magento\Authorizenet\Block\Adminhtml\Order\View\Info\PaymentDetails implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Payment\Gateway\ConfigInterface $config, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $config, $data);
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
