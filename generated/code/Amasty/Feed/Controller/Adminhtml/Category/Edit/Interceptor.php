<?php
namespace Amasty\Feed\Controller\Adminhtml\Category\Edit;

/**
 * Interceptor class for @see \Amasty\Feed\Controller\Adminhtml\Category\Edit
 */
class Interceptor extends \Amasty\Feed\Controller\Adminhtml\Category\Edit implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Registry $registry, \Amasty\Feed\Model\Category\Repository $repository, \Amasty\Feed\Model\Category\CategoryFactory $categoryFactory)
    {
        $this->___init();
        parent::__construct($context, $registry, $repository, $categoryFactory);
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
