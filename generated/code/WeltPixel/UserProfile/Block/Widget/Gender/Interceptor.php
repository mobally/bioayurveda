<?php
namespace WeltPixel\UserProfile\Block\Widget\Gender;

/**
 * Interceptor class for @see \WeltPixel\UserProfile\Block\Widget\Gender
 */
class Interceptor extends \WeltPixel\UserProfile\Block\Widget\Gender implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\WeltPixel\UserProfile\Model\Field\Gender $genderField, \WeltPixel\UserProfile\Model\UserProfileFields $userProfileFields, \Magento\Framework\View\Element\Template\Context $context, array $data = [])
    {
        $this->___init();
        parent::__construct($genderField, $userProfileFields, $context, $data);
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
