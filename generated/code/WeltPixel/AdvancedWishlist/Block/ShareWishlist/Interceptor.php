<?php
namespace WeltPixel\AdvancedWishlist\Block\ShareWishlist;

/**
 * Interceptor class for @see \WeltPixel\AdvancedWishlist\Block\ShareWishlist
 */
class Interceptor extends \WeltPixel\AdvancedWishlist\Block\ShareWishlist implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Wishlist\Helper\Data $wishlistHelper, \WeltPixel\AdvancedWishlist\Helper\Data $wpHelper, \Magento\Customer\Model\Session $customerSession, \Magento\Framework\View\Element\Template\Context $context, array $data = [])
    {
        $this->___init();
        parent::__construct($wishlistHelper, $wpHelper, $customerSession, $context, $data);
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
