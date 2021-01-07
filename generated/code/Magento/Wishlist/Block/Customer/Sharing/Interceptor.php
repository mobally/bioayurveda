<?php
namespace Magento\Wishlist\Block\Customer\Sharing;

/**
 * Interceptor class for @see \Magento\Wishlist\Block\Customer\Sharing
 */
class Interceptor extends \Magento\Wishlist\Block\Customer\Sharing implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Wishlist\Model\Config $wishlistConfig, \Magento\Framework\Session\Generic $wishlistSession, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $wishlistConfig, $wishlistSession, $data);
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
