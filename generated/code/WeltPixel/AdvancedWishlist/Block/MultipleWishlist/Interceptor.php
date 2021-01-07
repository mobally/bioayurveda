<?php
namespace WeltPixel\AdvancedWishlist\Block\MultipleWishlist;

/**
 * Interceptor class for @see \WeltPixel\AdvancedWishlist\Block\MultipleWishlist
 */
class Interceptor extends \WeltPixel\AdvancedWishlist\Block\MultipleWishlist implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\WeltPixel\AdvancedWishlist\Helper\Data $helper, \WeltPixel\AdvancedWishlist\Model\MultipleWishlistProvider $multipleWishlistProvider, \Magento\Framework\View\Element\Template\Context $context, array $data = [])
    {
        $this->___init();
        parent::__construct($helper, $multipleWishlistProvider, $context, $data);
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
