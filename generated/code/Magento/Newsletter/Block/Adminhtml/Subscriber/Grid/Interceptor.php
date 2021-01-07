<?php
namespace Magento\Newsletter\Block\Adminhtml\Subscriber\Grid;

/**
 * Interceptor class for @see \Magento\Newsletter\Block\Adminhtml\Subscriber\Grid
 */
class Interceptor extends \Magento\Newsletter\Block\Adminhtml\Subscriber\Grid implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Backend\Helper\Data $backendHelper, \Magento\Newsletter\Model\QueueFactory $queueFactory, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $backendHelper, $queueFactory, $data);
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
