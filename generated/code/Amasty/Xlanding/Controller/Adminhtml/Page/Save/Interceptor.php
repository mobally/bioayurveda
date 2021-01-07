<?php
namespace Amasty\Xlanding\Controller\Adminhtml\Page\Save;

/**
 * Interceptor class for @see \Amasty\Xlanding\Controller\Adminhtml\Page\Save
 */
class Interceptor extends \Amasty\Xlanding\Controller\Adminhtml\Page\Save implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Amasty\Xlanding\Controller\Adminhtml\Page\PostDataProcessor $dataProcessor, \Amasty\Base\Model\Serializer $serializer, \Amasty\Xlanding\Model\PageFactory $pageFactory, \Amasty\Xlanding\Model\RuleFactory $ruleFactory, \Amasty\Xlanding\Model\Page\Product\AdminhtmlDataProvider $dataProvider)
    {
        $this->___init();
        parent::__construct($context, $dataProcessor, $serializer, $pageFactory, $ruleFactory, $dataProvider);
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
