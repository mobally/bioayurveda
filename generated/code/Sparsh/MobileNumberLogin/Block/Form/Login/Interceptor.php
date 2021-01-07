<?php
namespace Sparsh\MobileNumberLogin\Block\Form\Login;

/**
 * Interceptor class for @see \Sparsh\MobileNumberLogin\Block\Form\Login
 */
class Interceptor extends \Sparsh\MobileNumberLogin\Block\Form\Login implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Customer\Model\Session $customerSession, \Magento\Customer\Model\Url $customerUrl, \Sparsh\MobileNumberLogin\Helper\Data $helperData, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $customerSession, $customerUrl, $helperData, $data);
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
