<?php
namespace WeltPixel\AdvancedWishlist\Block\Wishlist\ProductList;

/**
 * Interceptor class for @see \WeltPixel\AdvancedWishlist\Block\Wishlist\ProductList
 */
class Interceptor extends \WeltPixel\AdvancedWishlist\Block\Wishlist\ProductList implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\WeltPixel\AdvancedWishlist\Helper\Data $helper, \WeltPixel\AdvancedWishlist\Model\MultipleWishlistProvider $multipleWishlistProvider, \Magento\Customer\Api\CustomerRepositoryInterface $customerRepository, \Magento\Framework\View\Element\Template\Context $context, array $data = [])
    {
        $this->___init();
        parent::__construct($helper, $multipleWishlistProvider, $customerRepository, $context, $data);
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
