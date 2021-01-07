<?php
namespace Dotdigitalgroup\Chat\Block\Adminhtml\StudioChatWidget;

/**
 * Interceptor class for @see \Dotdigitalgroup\Chat\Block\Adminhtml\StudioChatWidget
 */
class Interceptor extends \Dotdigitalgroup\Chat\Block\Adminhtml\StudioChatWidget implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Dotdigitalgroup\Email\Helper\OauthValidator $oauthValidator, \Dotdigitalgroup\Chat\Model\Config $config, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $oauthValidator, $config, $data);
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
