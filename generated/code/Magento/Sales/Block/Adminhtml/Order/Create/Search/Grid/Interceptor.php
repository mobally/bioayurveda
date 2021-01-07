<?php
namespace Magento\Sales\Block\Adminhtml\Order\Create\Search\Grid;

/**
 * Interceptor class for @see \Magento\Sales\Block\Adminhtml\Order\Create\Search\Grid
 */
class Interceptor extends \Magento\Sales\Block\Adminhtml\Order\Create\Search\Grid implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Backend\Helper\Data $backendHelper, \Magento\Catalog\Model\ProductFactory $productFactory, \Magento\Catalog\Model\Config $catalogConfig, \Magento\Backend\Model\Session\Quote $sessionQuote, \Magento\Sales\Model\Config $salesConfig, array $data = [], ?\Magento\Sales\Block\Adminhtml\Order\Create\Search\Grid\DataProvider\ProductCollection $productCollectionProvider = null)
    {
        $this->___init();
        parent::__construct($context, $backendHelper, $productFactory, $catalogConfig, $sessionQuote, $salesConfig, $data, $productCollectionProvider);
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
