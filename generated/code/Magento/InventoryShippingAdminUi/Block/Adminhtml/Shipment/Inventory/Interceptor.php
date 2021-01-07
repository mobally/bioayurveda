<?php
namespace Magento\InventoryShippingAdminUi\Block\Adminhtml\Shipment\Inventory;

/**
 * Interceptor class for @see \Magento\InventoryShippingAdminUi\Block\Adminhtml\Shipment\Inventory
 */
class Interceptor extends \Magento\InventoryShippingAdminUi\Block\Adminhtml\Shipment\Inventory implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\InventoryApi\Api\SourceRepositoryInterface $sourceRepository, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $sourceRepository, $data);
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
