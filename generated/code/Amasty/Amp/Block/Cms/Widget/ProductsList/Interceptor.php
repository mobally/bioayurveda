<?php
namespace Amasty\Amp\Block\Cms\Widget\ProductsList;

/**
 * Interceptor class for @see \Amasty\Amp\Block\Cms\Widget\ProductsList
 */
class Interceptor extends \Amasty\Amp\Block\Cms\Widget\ProductsList implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Block\Product\Context $context, \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $productCollectionFactory, \Magento\Catalog\Model\Product\Visibility $catalogProductVisibility, \Magento\Framework\App\Http\Context $httpContext, \Magento\Rule\Model\Condition\Sql\Builder $sqlBuilder, \Magento\CatalogWidget\Model\Rule $rule, \Magento\Widget\Helper\Conditions $conditionsHelper, \Magento\Catalog\Api\CategoryRepositoryInterface $categoryRepository, array $data = [], ?\Magento\Framework\Serialize\Serializer\Json $json = null, ?\Magento\Framework\View\LayoutFactory $layoutFactory = null, ?\Magento\Framework\Url\EncoderInterface $urlEncoder = null)
    {
        $this->___init();
        parent::__construct($context, $productCollectionFactory, $catalogProductVisibility, $httpContext, $sqlBuilder, $rule, $conditionsHelper, $categoryRepository, $data, $json, $layoutFactory, $urlEncoder);
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
