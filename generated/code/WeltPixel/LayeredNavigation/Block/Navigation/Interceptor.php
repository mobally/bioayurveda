<?php
namespace WeltPixel\LayeredNavigation\Block\Navigation;

/**
 * Interceptor class for @see \WeltPixel\LayeredNavigation\Block\Navigation
 */
class Interceptor extends \WeltPixel\LayeredNavigation\Block\Navigation implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Catalog\Model\Layer\Resolver $layerResolver, \Magento\Catalog\Model\Layer\FilterList $filterList, \Magento\Catalog\Model\Layer\AvailabilityFlagInterface $visibilityFlag, \Magento\Catalog\Helper\Product\ProductList $productListHelper, \WeltPixel\LayeredNavigation\Helper\Data $wpHelper, \WeltPixel\LayeredNavigation\Model\AttributeOptions $attributeOptions, \Magento\Framework\Registry $registry, \Magento\Swatches\Helper\Data $swatchHelper, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $layerResolver, $filterList, $visibilityFlag, $productListHelper, $wpHelper, $attributeOptions, $registry, $swatchHelper, $data);
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
