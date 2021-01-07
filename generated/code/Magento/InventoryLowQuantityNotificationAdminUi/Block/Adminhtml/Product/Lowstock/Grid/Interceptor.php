<?php
namespace Magento\InventoryLowQuantityNotificationAdminUi\Block\Adminhtml\Product\Lowstock\Grid;

/**
 * Interceptor class for @see \Magento\InventoryLowQuantityNotificationAdminUi\Block\Adminhtml\Product\Lowstock\Grid
 */
class Interceptor extends \Magento\InventoryLowQuantityNotificationAdminUi\Block\Adminhtml\Product\Lowstock\Grid implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Backend\Helper\Data $backendHelper, \Magento\InventoryLowQuantityNotification\Model\ResourceModel\LowQuantityCollectionFactory $lowQuantityCollectionFactory, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $backendHelper, $lowQuantityCollectionFactory, $data);
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
