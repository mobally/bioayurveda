<?php
namespace Eighteentech\Home\Block\Home;

/**
 * Interceptor class for @see \Eighteentech\Home\Block\Home
 */
class Interceptor extends \Eighteentech\Home\Block\Home implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Catalog\Helper\Image $imageHelper, \Magento\Catalog\Helper\Output $outputHelper, \Magento\Catalog\Model\CategoryFactory $categoryFactory, \Magento\Catalog\Model\ResourceModel\Category\CollectionFactory $categoryCollectionFactory, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\Registry $registry, \Magento\Catalog\Block\Product\ImageBuilder $imageBuilder, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $imageHelper, $outputHelper, $categoryFactory, $categoryCollectionFactory, $storeManager, $registry, $imageBuilder, $data);
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
