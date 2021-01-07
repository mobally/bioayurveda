<?php
namespace Magento\Reports\Block\Adminhtml\Product\Viewed;

/**
 * Interceptor class for @see \Magento\Reports\Block\Adminhtml\Product\Viewed
 */
class Interceptor extends \Magento\Reports\Block\Adminhtml\Product\Viewed implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Widget\Context $context, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $data);
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
