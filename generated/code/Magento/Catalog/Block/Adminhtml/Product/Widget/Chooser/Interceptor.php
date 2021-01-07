<?php
namespace Magento\Catalog\Block\Adminhtml\Product\Widget\Chooser;

/**
 * Interceptor class for @see \Magento\Catalog\Block\Adminhtml\Product\Widget\Chooser
 */
class Interceptor extends \Magento\Catalog\Block\Adminhtml\Product\Widget\Chooser implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Backend\Helper\Data $backendHelper, \Magento\Catalog\Model\CategoryFactory $categoryFactory, \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $collectionFactory, \Magento\Catalog\Model\ResourceModel\Category $resourceCategory, \Magento\Catalog\Model\ResourceModel\Product $resourceProduct, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $backendHelper, $categoryFactory, $collectionFactory, $resourceCategory, $resourceProduct, $data);
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
