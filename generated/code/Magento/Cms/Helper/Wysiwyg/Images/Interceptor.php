<?php
namespace Magento\Cms\Helper\Wysiwyg\Images;

/**
 * Interceptor class for @see \Magento\Cms\Helper\Wysiwyg\Images
 */
class Interceptor extends \Magento\Cms\Helper\Wysiwyg\Images implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Helper\Context $context, \Magento\Backend\Helper\Data $backendData, \Magento\Framework\Filesystem $filesystem, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\Escaper $escaper)
    {
        $this->___init();
        parent::__construct($context, $backendData, $filesystem, $storeManager, $escaper);
    }

    /**
     * {@inheritdoc}
     */
    public function getImageHtmlDeclaration($filename, $renderAsTag = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getImageHtmlDeclaration');
        if (!$pluginInfo) {
            return parent::getImageHtmlDeclaration($filename, $renderAsTag);
        } else {
            return $this->___callPlugins('getImageHtmlDeclaration', func_get_args(), $pluginInfo);
        }
    }
}
