<?php
namespace Magento\Wishlist\Block\Link;

/**
 * Interceptor class for @see \Magento\Wishlist\Block\Link
 */
class Interceptor extends \Magento\Wishlist\Block\Link implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Wishlist\Helper\Data $wishlistHelper, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $wishlistHelper, $data);
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
