<?php
namespace Amasty\Amp\Controller\Router;

/**
 * Interceptor class for @see \Amasty\Amp\Controller\Router
 */
class Interceptor extends \Amasty\Amp\Controller\Router implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Amasty\Amp\Model\ConfigProvider $config, \Magento\Backend\Model\UrlInterface $url)
    {
        $this->___init();
        parent::__construct($config, $url);
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
