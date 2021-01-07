<?php
namespace Meetanshi\RestrictZip\Controller\RestrictZip\Index;

/**
 * Interceptor class for @see \Meetanshi\RestrictZip\Controller\RestrictZip\Index
 */
class Interceptor extends \Meetanshi\RestrictZip\Controller\RestrictZip\Index implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Meetanshi\RestrictZip\Helper\Data $helper, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\App\Action\Context $context, \Meetanshi\RestrictZip\Model\RestrictZipFactory $restrictZipFactory, \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory)
    {
        $this->___init();
        parent::__construct($helper, $storeManager, $context, $restrictZipFactory, $resultJsonFactory);
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
