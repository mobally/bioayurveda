<?php
namespace Magento\Sales\Block\Adminhtml\Order\Comments\View;

/**
 * Interceptor class for @see \Magento\Sales\Block\Adminhtml\Order\Comments\View
 */
class Interceptor extends \Magento\Sales\Block\Adminhtml\Order\Comments\View implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Sales\Helper\Data $salesData, \Magento\Sales\Helper\Admin $adminHelper, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $salesData, $adminHelper, $data);
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
