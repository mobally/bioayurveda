<?php
namespace Eighteentech\Certificate\Block\Adminhtml\Certificate\Grid;

/**
 * Interceptor class for @see \Eighteentech\Certificate\Block\Adminhtml\Certificate\Grid
 */
class Interceptor extends \Eighteentech\Certificate\Block\Adminhtml\Certificate\Grid implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Backend\Helper\Data $backendHelper, \Eighteentech\Certificate\Model\Certificate $certificate, \Eighteentech\Certificate\Model\ResourceModel\Certificate\CollectionFactory $collectionFactory, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $backendHelper, $certificate, $collectionFactory, $data);
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
