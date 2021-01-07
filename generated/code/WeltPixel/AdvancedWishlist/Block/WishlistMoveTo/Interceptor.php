<?php
namespace WeltPixel\AdvancedWishlist\Block\WishlistMoveTo;

/**
 * Interceptor class for @see \WeltPixel\AdvancedWishlist\Block\WishlistMoveTo
 */
class Interceptor extends \WeltPixel\AdvancedWishlist\Block\WishlistMoveTo implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\WeltPixel\AdvancedWishlist\Helper\Data $helper, \Magento\Framework\Data\Helper\PostHelper $postDataHelper, \Magento\Framework\View\Element\Template\Context $context, array $data = [])
    {
        $this->___init();
        parent::__construct($helper, $postDataHelper, $context, $data);
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
