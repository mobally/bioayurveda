<?php
namespace WeltPixel\AdvancedWishlist\Controller\View\Editable;

/**
 * Interceptor class for @see \WeltPixel\AdvancedWishlist\Controller\View\Editable
 */
class Interceptor extends \WeltPixel\AdvancedWishlist\Controller\View\Editable implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Customer\Model\Session $customerSession)
    {
        $this->___init();
        parent::__construct($context, $customerSession);
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
