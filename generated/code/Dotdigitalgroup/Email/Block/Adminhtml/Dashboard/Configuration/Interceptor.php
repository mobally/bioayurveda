<?php
namespace Dotdigitalgroup\Email\Block\Adminhtml\Dashboard\Configuration;

/**
 * Interceptor class for @see \Dotdigitalgroup\Email\Block\Adminhtml\Dashboard\Configuration
 */
class Interceptor extends \Dotdigitalgroup\Email\Block\Adminhtml\Dashboard\Configuration implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Config\Model\Config\Structure $configStructure, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $configStructure, $data);
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
