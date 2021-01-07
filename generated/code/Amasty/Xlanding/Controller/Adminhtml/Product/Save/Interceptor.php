<?php
namespace Amasty\Xlanding\Controller\Adminhtml\Product\Save;

/**
 * Interceptor class for @see \Amasty\Xlanding\Controller\Adminhtml\Product\Save
 */
class Interceptor extends \Amasty\Xlanding\Controller\Adminhtml\Product\Save implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Amasty\Xlanding\Model\Page\Product\AdminhtmlDataProvider $dataProvider, \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory, \Amasty\Xlanding\Model\RuleFactory $ruleFactory, \Amasty\Xlanding\Model\PageFactory $pageFactory, \Amasty\Xlanding\Api\PageRepositoryInterface $pageRepository, \Amasty\Base\Model\Serializer $serializer, \Magento\Framework\Registry $registry)
    {
        $this->___init();
        parent::__construct($context, $dataProvider, $resultJsonFactory, $ruleFactory, $pageFactory, $pageRepository, $serializer, $registry);
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
