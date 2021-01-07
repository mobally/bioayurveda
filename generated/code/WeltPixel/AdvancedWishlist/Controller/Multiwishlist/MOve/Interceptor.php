<?php
namespace WeltPixel\AdvancedWishlist\Controller\Multiwishlist\MOve;

/**
 * Interceptor class for @see \WeltPixel\AdvancedWishlist\Controller\Multiwishlist\MOve
 */
class Interceptor extends \WeltPixel\AdvancedWishlist\Controller\Multiwishlist\MOve implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Wishlist\Model\ItemFactory $wishlistItemFactory, \Magento\Customer\Model\Session $customerSession, \Magento\Framework\Data\Form\FormKey\Validator $formKeyValidator, \Psr\Log\LoggerInterface $logger, \Magento\Wishlist\Model\WishlistFactory $wishlistFactory, \Magento\Framework\App\Action\Context $context)
    {
        $this->___init();
        parent::__construct($wishlistItemFactory, $customerSession, $formKeyValidator, $logger, $wishlistFactory, $context);
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        if (!$pluginInfo) {
            return parent::dispatch($request);
        } else {
            return $this->___callPlugins('dispatch', func_get_args(), $pluginInfo);
        }
    }
}
