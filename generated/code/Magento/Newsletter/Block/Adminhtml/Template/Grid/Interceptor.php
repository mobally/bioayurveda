<?php
namespace Magento\Newsletter\Block\Adminhtml\Template\Grid;

/**
 * Interceptor class for @see \Magento\Newsletter\Block\Adminhtml\Template\Grid
 */
class Interceptor extends \Magento\Newsletter\Block\Adminhtml\Template\Grid implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Backend\Helper\Data $backendHelper, \Magento\Newsletter\Model\ResourceModel\Template\Collection $templateCollection, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $backendHelper, $templateCollection, $data);
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
