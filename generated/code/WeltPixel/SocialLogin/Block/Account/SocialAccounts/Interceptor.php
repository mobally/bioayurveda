<?php
namespace WeltPixel\SocialLogin\Block\Account\SocialAccounts;

/**
 * Interceptor class for @see \WeltPixel\SocialLogin\Block\Account\SocialAccounts
 */
class Interceptor extends \WeltPixel\SocialLogin\Block\Account\SocialAccounts implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Customer\Model\Session $customerSession, \WeltPixel\SocialLogin\Model\SocialloginFactory $socialloginFactory, \Magento\Framework\App\Response\Http $response, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $customerSession, $socialloginFactory, $response, $data);
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
