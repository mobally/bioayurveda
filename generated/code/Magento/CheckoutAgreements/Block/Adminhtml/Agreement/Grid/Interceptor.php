<?php
namespace Magento\CheckoutAgreements\Block\Adminhtml\Agreement\Grid;

/**
 * Interceptor class for @see \Magento\CheckoutAgreements\Block\Adminhtml\Agreement\Grid
 */
class Interceptor extends \Magento\CheckoutAgreements\Block\Adminhtml\Agreement\Grid implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Backend\Helper\Data $backendHelper, \Magento\CheckoutAgreements\Model\ResourceModel\Agreement\CollectionFactory $collectionFactory, array $data = [], ?\Magento\CheckoutAgreements\Model\ResourceModel\Agreement\Grid\CollectionFactory $gridColFactory = null)
    {
        $this->___init();
        parent::__construct($context, $backendHelper, $collectionFactory, $data, $gridColFactory);
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
