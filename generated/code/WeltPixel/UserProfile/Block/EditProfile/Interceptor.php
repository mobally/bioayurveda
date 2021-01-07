<?php
namespace WeltPixel\UserProfile\Block\EditProfile;

/**
 * Interceptor class for @see \WeltPixel\UserProfile\Block\EditProfile
 */
class Interceptor extends \WeltPixel\UserProfile\Block\EditProfile implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Customer\Model\Session $customerSession, \WeltPixel\UserProfile\Model\UserProfileFields $userProfileFields, \WeltPixel\UserProfile\Model\UserProfileFactory $userProfileFactory, \Magento\Framework\View\Element\Template\Context $context, array $data = [])
    {
        $this->___init();
        parent::__construct($customerSession, $userProfileFields, $userProfileFactory, $context, $data);
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
