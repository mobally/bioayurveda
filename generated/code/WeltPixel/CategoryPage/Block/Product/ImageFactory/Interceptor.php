<?php
namespace WeltPixel\CategoryPage\Block\Product\ImageFactory;

/**
 * Interceptor class for @see \WeltPixel\CategoryPage\Block\Product\ImageFactory
 */
class Interceptor extends \WeltPixel\CategoryPage\Block\Product\ImageFactory implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, \Magento\Framework\View\ConfigInterface $presentationConfig, \Magento\Catalog\Model\View\Asset\ImageFactory $viewAssetImageFactory, \Magento\Catalog\Model\View\Asset\PlaceholderFactory $viewAssetPlaceholderFactory, \Magento\Catalog\Model\Product\Image\ParamsBuilder $imageParamsBuilder, \WeltPixel\CategoryPage\Helper\Data $categoryPageHelper, \WeltPixel\OwlCarouselSlider\Helper\Custom $owlHelperCustom, \WeltPixel\LazyLoading\Helper\Data $lazyLoadingHelper)
    {
        $this->___init();
        parent::__construct($objectManager, $presentationConfig, $viewAssetImageFactory, $viewAssetPlaceholderFactory, $imageParamsBuilder, $categoryPageHelper, $owlHelperCustom, $lazyLoadingHelper);
    }

    /**
     * {@inheritdoc}
     */
    public function create(\Magento\Catalog\Model\Product $product, string $imageId, ?array $attributes = null) : \Magento\Catalog\Block\Product\Image
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'create');
        if (!$pluginInfo) {
            return parent::create($product, $imageId, $attributes);
        } else {
            return $this->___callPlugins('create', func_get_args(), $pluginInfo);
        }
    }
}
