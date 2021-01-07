<?php
namespace Magento\InventoryProductAlert\Block\Adminhtml\Product\Edit\Tab\Alerts\Stock;

/**
 * Interceptor class for @see \Magento\InventoryProductAlert\Block\Adminhtml\Product\Edit\Tab\Alerts\Stock
 */
class Interceptor extends \Magento\InventoryProductAlert\Block\Adminhtml\Product\Edit\Tab\Alerts\Stock implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Backend\Helper\Data $backendHelper, \Magento\ProductAlert\Model\StockFactory $stockFactory, \Magento\Framework\Module\Manager $moduleManager, \Magento\InventorySalesApi\Api\StockResolverInterface $stockResolver, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $backendHelper, $stockFactory, $moduleManager, $stockResolver, $data);
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
