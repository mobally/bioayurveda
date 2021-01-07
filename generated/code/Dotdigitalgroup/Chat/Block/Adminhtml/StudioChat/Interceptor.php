<?php
namespace Dotdigitalgroup\Chat\Block\Adminhtml\StudioChat;

/**
 * Interceptor class for @see \Dotdigitalgroup\Chat\Block\Adminhtml\StudioChat
 */
class Interceptor extends \Dotdigitalgroup\Chat\Block\Adminhtml\StudioChat implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Dotdigitalgroup\Email\Model\Trial\TrialSetupFactory $trialSetupFactory, \Dotdigitalgroup\Email\Helper\Data $helper, \Dotdigitalgroup\Chat\Model\Config $config, \Dotdigitalgroup\Email\Helper\OauthValidator $oauth)
    {
        $this->___init();
        parent::__construct($context, $trialSetupFactory, $helper, $config, $oauth);
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
