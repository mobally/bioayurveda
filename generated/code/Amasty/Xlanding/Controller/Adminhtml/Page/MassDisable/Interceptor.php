<?php
namespace Amasty\Xlanding\Controller\Adminhtml\Page\MassDisable;

/**
 * Interceptor class for @see \Amasty\Xlanding\Controller\Adminhtml\Page\MassDisable
 */
class Interceptor extends \Amasty\Xlanding\Controller\Adminhtml\Page\MassDisable implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Amasty\Xlanding\Model\ResourceModel\Page\CollectionFactory $collectionFactory, \Magento\Ui\Component\MassAction\Filter $filter)
    {
        $this->___init();
        parent::__construct($context, $collectionFactory, $filter);
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
