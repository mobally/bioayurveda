<?php
namespace Amasty\Xlanding\Controller\Page\View;

/**
 * Interceptor class for @see \Amasty\Xlanding\Controller\Page\View
 */
class Interceptor extends \Amasty\Xlanding\Controller\Page\View implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\Controller\Result\ForwardFactory $resultForwardFactory, \Amasty\Xlanding\Helper\Page $pageHelper)
    {
        $this->___init();
        parent::__construct($context, $resultForwardFactory, $pageHelper);
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
