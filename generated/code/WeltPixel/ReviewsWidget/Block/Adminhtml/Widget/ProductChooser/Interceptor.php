<?php
namespace WeltPixel\ReviewsWidget\Block\Adminhtml\Widget\ProductChooser;

/**
 * Interceptor class for @see \WeltPixel\ReviewsWidget\Block\Adminhtml\Widget\ProductChooser
 */
class Interceptor extends \WeltPixel\ReviewsWidget\Block\Adminhtml\Widget\ProductChooser implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Backend\Helper\Data $backendHelper, \Magento\Catalog\Model\ProductFactory $productFactory, \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $collectionFactory, \Magento\Catalog\Model\Product\Attribute\Source\Status $productStatus, \Magento\Catalog\Model\Product\Visibility $productVisibility, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $backendHelper, $productFactory, $collectionFactory, $productStatus, $productVisibility, $data);
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
