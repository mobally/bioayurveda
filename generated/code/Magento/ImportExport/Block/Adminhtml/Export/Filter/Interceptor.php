<?php
namespace Magento\ImportExport\Block\Adminhtml\Export\Filter;

/**
 * Interceptor class for @see \Magento\ImportExport\Block\Adminhtml\Export\Filter
 */
class Interceptor extends \Magento\ImportExport\Block\Adminhtml\Export\Filter implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Backend\Helper\Data $backendHelper, \Magento\ImportExport\Helper\Data $importExportData, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $backendHelper, $importExportData, $data);
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
