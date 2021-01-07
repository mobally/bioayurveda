<?php
namespace Amasty\Feed\Controller\Adminhtml\Category\Save;

/**
 * Interceptor class for @see \Amasty\Feed\Controller\Adminhtml\Category\Save
 */
class Interceptor extends \Amasty\Feed\Controller\Adminhtml\Category\Save implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Amasty\Feed\Model\Category\Repository $repository, \Magento\Backend\App\Action\Context $context, \Psr\Log\LoggerInterface $logger)
    {
        $this->___init();
        parent::__construct($repository, $context, $logger);
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
