<?php
namespace Magento\Newsletter\Block\Adminhtml\Problem;

/**
 * Interceptor class for @see \Magento\Newsletter\Block\Adminhtml\Problem
 */
class Interceptor extends \Magento\Newsletter\Block\Adminhtml\Problem implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Newsletter\Model\ResourceModel\Problem\Collection $problemCollection, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $problemCollection, $data);
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
