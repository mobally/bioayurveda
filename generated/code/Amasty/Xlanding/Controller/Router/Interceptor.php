<?php
namespace Amasty\Xlanding\Controller\Router;

/**
 * Interceptor class for @see \Amasty\Xlanding\Controller\Router
 */
class Interceptor extends \Amasty\Xlanding\Controller\Router implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\ActionFactory $actionFactory, \Magento\Framework\Event\ManagerInterface $eventManager, \Magento\Framework\UrlInterface $url, \Amasty\Xlanding\Model\PageFactory $pageFactory, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\App\ResponseInterface $response)
    {
        $this->___init();
        parent::__construct($actionFactory, $eventManager, $url, $pageFactory, $storeManager, $response);
    }

    /**
     * {@inheritdoc}
     */
    public function match(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'match');
        if (!$pluginInfo) {
            return parent::match($request);
        } else {
            return $this->___callPlugins('match', func_get_args(), $pluginInfo);
        }
    }
}
