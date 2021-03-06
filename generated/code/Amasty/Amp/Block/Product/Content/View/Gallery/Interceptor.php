<?php
namespace Amasty\Amp\Block\Product\Content\View\Gallery;

/**
 * Interceptor class for @see \Amasty\Amp\Block\Product\Content\View\Gallery
 */
class Interceptor extends \Amasty\Amp\Block\Product\Content\View\Gallery implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Block\Product\Context $context, \Magento\Framework\Stdlib\ArrayUtils $arrayUtils, \Magento\Framework\Json\EncoderInterface $jsonEncoder, array $data = [], ?\Magento\Catalog\Model\Product\Gallery\ImagesConfigFactoryInterface $imagesConfigFactory = null, array $galleryImagesConfig = [], ?\Magento\Catalog\Model\Product\Image\UrlBuilder $urlBuilder = null)
    {
        $this->___init();
        parent::__construct($context, $arrayUtils, $jsonEncoder, $data, $imagesConfigFactory, $galleryImagesConfig, $urlBuilder);
    }

    /**
     * {@inheritdoc}
     */
    public function getMagnifier()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMagnifier');
        if (!$pluginInfo) {
            return parent::getMagnifier();
        } else {
            return $this->___callPlugins('getMagnifier', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getImage($product, $imageId, $attributes = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getImage');
        if (!$pluginInfo) {
            return parent::getImage($product, $imageId, $attributes);
        } else {
            return $this->___callPlugins('getImage', func_get_args(), $pluginInfo);
        }
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

    /**
     * {@inheritdoc}
     */
    public function getVar($name, $module = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getVar');
        if (!$pluginInfo) {
            return parent::getVar($name, $module);
        } else {
            return $this->___callPlugins('getVar', func_get_args(), $pluginInfo);
        }
    }
}
