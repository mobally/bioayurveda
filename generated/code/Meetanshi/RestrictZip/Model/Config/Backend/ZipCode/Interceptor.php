<?php
namespace Meetanshi\RestrictZip\Model\Config\Backend\ZipCode;

/**
 * Interceptor class for @see \Meetanshi\RestrictZip\Model\Config\Backend\ZipCode
 */
class Interceptor extends \Meetanshi\RestrictZip\Model\Config\Backend\ZipCode implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\App\Config\ScopeConfigInterface $config, \Magento\Framework\App\Cache\TypeListInterface $cacheTypeList, \Magento\MediaStorage\Model\File\UploaderFactory $uploaderFactory, \Magento\Config\Model\Config\Backend\File\RequestData\RequestDataInterface $requestData, \Magento\Framework\Filesystem $filesystem, ?\Magento\Framework\Model\ResourceModel\AbstractResource $resource, ?\Magento\Framework\Data\Collection\AbstractDb $resourceCollection, \Meetanshi\RestrictZip\Model\RestrictZipFactory $importFactory, \Magento\Framework\File\Csv $csv, \Meetanshi\RestrictZip\Helper\Data $helper, \Magento\Store\Model\StoreManagerInterface $storeManager, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $config, $cacheTypeList, $uploaderFactory, $requestData, $filesystem, $resource, $resourceCollection, $importFactory, $csv, $helper, $storeManager, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function afterSave()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'afterSave');
        if (!$pluginInfo) {
            return parent::afterSave();
        } else {
            return $this->___callPlugins('afterSave', func_get_args(), $pluginInfo);
        }
    }
}
