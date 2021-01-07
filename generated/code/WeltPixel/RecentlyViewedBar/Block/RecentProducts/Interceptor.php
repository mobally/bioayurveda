<?php
namespace WeltPixel\RecentlyViewedBar\Block\RecentProducts;

/**
 * Interceptor class for @see \WeltPixel\RecentlyViewedBar\Block\RecentProducts
 */
class Interceptor extends \WeltPixel\RecentlyViewedBar\Block\RecentProducts implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Block\Product\Context $context, \WeltPixel\RecentlyViewedBar\Helper\Data $avrHelper, \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $productsCollectionFactory, \Magento\Reports\Block\Product\Widget\Viewed\Proxy $viewedProductsBlock, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $avrHelper, $productsCollectionFactory, $viewedProductsBlock, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getImage($product, $imageId, $attributes = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getImage');
        if (!$pluginInfo) {
            return parent::getImage($product, $imageId, $attributes);
        } else {
            return $this->___callPlugins('getImage', func_get_args(), $pluginInfo);
        }
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
