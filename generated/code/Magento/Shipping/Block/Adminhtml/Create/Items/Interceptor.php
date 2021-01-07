<?php
namespace Magento\Shipping\Block\Adminhtml\Create\Items;

/**
 * Interceptor class for @see \Magento\Shipping\Block\Adminhtml\Create\Items
 */
class Interceptor extends \Magento\Shipping\Block\Adminhtml\Create\Items implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\CatalogInventory\Api\StockRegistryInterface $stockRegistry, \Magento\CatalogInventory\Api\StockConfigurationInterface $stockConfiguration, \Magento\Framework\Registry $registry, \Magento\Sales\Helper\Data $salesData, \Magento\Shipping\Model\CarrierFactory $carrierFactory, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $stockRegistry, $stockConfiguration, $registry, $salesData, $carrierFactory, $data);
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
