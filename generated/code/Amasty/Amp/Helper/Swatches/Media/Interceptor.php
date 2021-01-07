<?php
namespace Amasty\Amp\Helper\Swatches\Media;

/**
 * Interceptor class for @see \Amasty\Amp\Helper\Swatches\Media
 */
class Interceptor extends \Amasty\Amp\Helper\Swatches\Media implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Model\Product\Media\Config $mediaConfig, \Magento\Framework\Filesystem $filesystem, \Magento\MediaStorage\Helper\File\Storage\Database $fileStorageDb, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\Image\Factory $imageFactory, \Magento\Theme\Model\ResourceModel\Theme\Collection $themeCollection, \Magento\Framework\View\ConfigInterface $configInterface)
    {
        $this->___init();
        parent::__construct($mediaConfig, $filesystem, $fileStorageDb, $storeManager, $imageFactory, $themeCollection, $configInterface);
    }

    /**
     * {@inheritdoc}
     */
    public function getImageConfig()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getImageConfig');
        if (!$pluginInfo) {
            return parent::getImageConfig();
        } else {
            return $this->___callPlugins('getImageConfig', func_get_args(), $pluginInfo);
        }
    }
}
