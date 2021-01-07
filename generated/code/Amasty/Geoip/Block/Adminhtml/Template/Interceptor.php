<?php
namespace Amasty\Geoip\Block\Adminhtml\Template;

/**
 * Interceptor class for @see \Amasty\Geoip\Block\Adminhtml\Template
 */
class Interceptor extends \Amasty\Geoip\Block\Adminhtml\Template implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Amasty\Geoip\Helper\Data $geoipHelper)
    {
        $this->___init();
        parent::__construct($context, $geoipHelper);
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
