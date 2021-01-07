<?php
namespace Meetanshi\RestrictZip\Controller\Adminhtml\RestrictZip\Index;

/**
 * Interceptor class for @see \Meetanshi\RestrictZip\Controller\Adminhtml\RestrictZip\Index
 */
class Interceptor extends \Meetanshi\RestrictZip\Controller\Adminhtml\RestrictZip\Index implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\App\Response\Http\FileFactory $fileFactory, \Magento\Framework\File\Csv $csvProcessor, \Magento\Framework\App\Filesystem\DirectoryList $directoryList, \Meetanshi\RestrictZip\Model\RestrictZipFactory $restrictZipFactory, \Magento\Store\Model\StoreManagerInterface $storeManager)
    {
        $this->___init();
        parent::__construct($context, $fileFactory, $csvProcessor, $directoryList, $restrictZipFactory, $storeManager);
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
