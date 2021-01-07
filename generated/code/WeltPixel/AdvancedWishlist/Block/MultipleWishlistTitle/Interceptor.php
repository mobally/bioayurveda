<?php
namespace WeltPixel\AdvancedWishlist\Block\MultipleWishlistTitle;

/**
 * Interceptor class for @see \WeltPixel\AdvancedWishlist\Block\MultipleWishlistTitle
 */
class Interceptor extends \WeltPixel\AdvancedWishlist\Block\MultipleWishlistTitle implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Wishlist\Model\WishlistFactory $wishlistFactory, \Magento\Framework\View\Element\Template\Context $context, array $data = [])
    {
        $this->___init();
        parent::__construct($wishlistFactory, $context, $data);
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
