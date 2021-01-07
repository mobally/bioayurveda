<?php
namespace WeltPixel\AdvancedWishlist\Block\Customer\Collections;

/**
 * Interceptor class for @see \WeltPixel\AdvancedWishlist\Block\Customer\Collections
 */
class Interceptor extends \WeltPixel\AdvancedWishlist\Block\Customer\Collections implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \WeltPixel\AdvancedWishlist\Model\MultipleWishlistProvider $multipleWishlistProvider, \WeltPixel\AdvancedWishlist\Helper\Data $advancedWishlistHelper, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $multipleWishlistProvider, $advancedWishlistHelper, $data);
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
