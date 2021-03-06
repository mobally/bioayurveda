<?php
namespace Magento\Wishlist\Block\Customer\Wishlist\Item\Column\Image;

/**
 * Interceptor class for @see \Magento\Wishlist\Block\Customer\Wishlist\Item\Column\Image
 */
class Interceptor extends \Magento\Wishlist\Block\Customer\Wishlist\Item\Column\Image implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Block\Product\Context $context, \Magento\Framework\App\Http\Context $httpContext, array $data = [], ?\Magento\Framework\View\ConfigInterface $config = null, ?\Magento\Catalog\Model\Product\Image\UrlBuilder $urlBuilder = null, ?\Magento\Catalog\Model\Product\Configuration\Item\ItemResolverInterface $itemResolver = null)
    {
        $this->___init();
        parent::__construct($context, $httpContext, $data, $config, $urlBuilder, $itemResolver);
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
