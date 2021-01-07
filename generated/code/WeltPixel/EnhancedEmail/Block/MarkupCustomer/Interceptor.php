<?php
namespace WeltPixel\EnhancedEmail\Block\MarkupCustomer;

/**
 * Interceptor class for @see \WeltPixel\EnhancedEmail\Block\MarkupCustomer
 */
class Interceptor extends \WeltPixel\EnhancedEmail\Block\MarkupCustomer implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Customer\Model\Session $customerSession, \Magento\User\Helper\Data $user_helper, \Magento\Backend\Block\Template\Context $context, array $data = [])
    {
        $this->___init();
        parent::__construct($customerSession, $user_helper, $context, $data);
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
