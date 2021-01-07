<?php
namespace WeltPixel\GoogleTagManager\Controller\Adminhtml\Json\Generate;

/**
 * Interceptor class for @see \WeltPixel\GoogleTagManager\Controller\Adminhtml\Json\Generate
 */
class Interceptor extends \WeltPixel\GoogleTagManager\Controller\Adminhtml\Json\Generate implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\WeltPixel\GoogleTagManager\Model\Api $apiModel, \WeltPixel\GoogleTagManager\Model\JsonGenerator $jsonGenerator, \Magento\Backend\App\Action\Context $context, \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory)
    {
        $this->___init();
        parent::__construct($apiModel, $jsonGenerator, $context, $resultJsonFactory);
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
