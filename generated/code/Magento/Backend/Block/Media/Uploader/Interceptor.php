<?php
namespace Magento\Backend\Block\Media\Uploader;

/**
 * Interceptor class for @see \Magento\Backend\Block\Media\Uploader
 */
class Interceptor extends \Magento\Backend\Block\Media\Uploader implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\File\Size $fileSize, array $data = [], ?\Magento\Framework\Serialize\Serializer\Json $jsonEncoder = null, ?\Magento\Framework\Image\Adapter\UploadConfigInterface $imageConfig = null, ?\Magento\Backend\Model\Image\UploadResizeConfigInterface $imageUploadConfig = null)
    {
        $this->___init();
        parent::__construct($context, $fileSize, $data, $jsonEncoder, $imageConfig, $imageUploadConfig);
    }

    /**
     * {@inheritdoc}
     */
    public function toHtml()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toHtml');
        if (!$pluginInfo) {
            return parent::toHtml();
        } else {
            return $this->___callPlugins('toHtml', func_get_args(), $pluginInfo);
        }
    }
}
