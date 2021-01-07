<?php
namespace Amasty\Xlanding\Controller\Adminhtml\Product\Listing;

/**
 * Interceptor class for @see \Amasty\Xlanding\Controller\Adminhtml\Product\Listing
 */
class Interceptor extends \Amasty\Xlanding\Controller\Adminhtml\Product\Listing implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Controller\Result\RawFactory $resultRawFactory, \Magento\Framework\View\LayoutFactory $layoutFactory, \Magento\Framework\Registry $registry, \Amasty\Xlanding\Model\PageFactory $pageFactory)
    {
        $this->___init();
        parent::__construct($context, $resultRawFactory, $layoutFactory, $registry, $pageFactory);
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
