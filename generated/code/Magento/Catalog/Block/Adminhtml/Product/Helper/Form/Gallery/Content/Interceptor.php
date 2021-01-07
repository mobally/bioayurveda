<?php
namespace Magento\Catalog\Block\Adminhtml\Product\Helper\Form\Gallery\Content;

/**
 * Interceptor class for @see \Magento\Catalog\Block\Adminhtml\Product\Helper\Form\Gallery\Content
 */
class Interceptor extends \Magento\Catalog\Block\Adminhtml\Product\Helper\Form\Gallery\Content implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Json\EncoderInterface $jsonEncoder, \Magento\Catalog\Model\Product\Media\Config $mediaConfig, array $data = [], ?\Magento\Backend\Block\DataProviders\ImageUploadConfig $imageUploadConfigDataProvider = null, ?\Magento\MediaStorage\Helper\File\Storage\Database $fileStorageDatabase = null)
    {
        $this->___init();
        parent::__construct($context, $jsonEncoder, $mediaConfig, $data, $imageUploadConfigDataProvider, $fileStorageDatabase);
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
