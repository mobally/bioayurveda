<?php
namespace Amazon\Payment\Block\Widget\ResetPassword;

/**
 * Interceptor class for @see \Amazon\Payment\Block\Widget\ResetPassword
 */
class Interceptor extends \Amazon\Payment\Block\Widget\ResetPassword implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Customer\Model\Url $urlModel, \Magento\Customer\Model\Session $session, \Amazon\Login\Api\CustomerLinkRepositoryInterface $customerLink, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $urlModel, $session, $customerLink, $data);
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
