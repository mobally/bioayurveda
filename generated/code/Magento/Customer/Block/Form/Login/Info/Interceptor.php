<?php
namespace Magento\Customer\Block\Form\Login\Info;

/**
 * Interceptor class for @see \Magento\Customer\Block\Form\Login\Info
 */
class Interceptor extends \Magento\Customer\Block\Form\Login\Info implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Customer\Model\Registration $registration, \Magento\Customer\Model\Url $customerUrl, \Magento\Checkout\Helper\Data $checkoutData, \Magento\Framework\Url\Helper\Data $coreUrl, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registration, $customerUrl, $checkoutData, $coreUrl, $data);
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
