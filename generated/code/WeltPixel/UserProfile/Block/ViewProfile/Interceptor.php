<?php
namespace WeltPixel\UserProfile\Block\ViewProfile;

/**
 * Interceptor class for @see \WeltPixel\UserProfile\Block\ViewProfile
 */
class Interceptor extends \WeltPixel\UserProfile\Block\ViewProfile implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\WeltPixel\UserProfile\Helper\Renderer $profileRendererHelper, \WeltPixel\UserProfile\Model\UserProfileFields $userProfileFields, \Magento\Framework\App\Http\Context $httpContext, \Magento\Widget\Model\Template\Filter $templateFilter, \Magento\Framework\View\Element\Template\Context $context, array $data = [])
    {
        $this->___init();
        parent::__construct($profileRendererHelper, $userProfileFields, $httpContext, $templateFilter, $context, $data);
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
