<?php
namespace Magento\Wishlist\Controller\Index\Plugin;

/**
 * Interceptor class for @see \Magento\Wishlist\Controller\Index\Plugin
 */
class Interceptor extends \Magento\Wishlist\Controller\Index\Plugin implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Customer\Model\Session $customerSession, \Magento\Wishlist\Model\AuthenticationStateInterface $authenticationState, \Magento\Framework\App\Config\ScopeConfigInterface $config, \Magento\Framework\App\Response\RedirectInterface $redirector, \Magento\Framework\Message\ManagerInterface $messageManager)
    {
        $this->___init();
        parent::__construct($customerSession, $authenticationState, $config, $redirector, $messageManager);
    }

    /**
     * {@inheritdoc}
     */
    public function beforeDispatch(\Magento\Framework\App\ActionInterface $subject, \Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'beforeDispatch');
        if (!$pluginInfo) {
            return parent::beforeDispatch($subject, $request);
        } else {
            return $this->___callPlugins('beforeDispatch', func_get_args(), $pluginInfo);
        }
    }
}
