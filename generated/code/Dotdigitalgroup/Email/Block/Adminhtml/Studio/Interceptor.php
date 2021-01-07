<?php
namespace Dotdigitalgroup\Email\Block\Adminhtml\Studio;

/**
 * Interceptor class for @see \Dotdigitalgroup\Email\Block\Adminhtml\Studio
 */
class Interceptor extends \Dotdigitalgroup\Email\Block\Adminhtml\Studio implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Dotdigitalgroup\Email\Helper\Config $config, \Magento\Backend\Block\Template\Context $context, \Dotdigitalgroup\Email\Helper\Data $helper, \Dotdigitalgroup\Email\Model\Trial\TrialSetupFactory $trialSetupFactory, \Dotdigitalgroup\Email\Helper\OauthValidator $oauth)
    {
        $this->___init();
        parent::__construct($config, $context, $helper, $trialSetupFactory, $oauth);
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
