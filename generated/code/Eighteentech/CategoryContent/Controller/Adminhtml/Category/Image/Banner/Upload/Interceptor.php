<?php
namespace Eighteentech\CategoryContent\Controller\Adminhtml\Category\Image\Banner\Upload;

/**
 * Interceptor class for @see \Eighteentech\CategoryContent\Controller\Adminhtml\Category\Image\Banner\Upload
 */
class Interceptor extends \Eighteentech\CategoryContent\Controller\Adminhtml\Category\Image\Banner\Upload implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Catalog\Model\ImageUploader $imageUploader, \Magento\MediaStorage\Model\File\UploaderFactory $uploaderFactory, \Magento\Framework\Filesystem $filesystem, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\MediaStorage\Helper\File\Storage\Database $coreFileStorageDatabase, \Psr\Log\LoggerInterface $logger)
    {
        $this->___init();
        parent::__construct($context, $imageUploader, $uploaderFactory, $filesystem, $storeManager, $coreFileStorageDatabase, $logger);
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
