<?php
namespace Amasty\Amp\Block\Product\Content\View\Review\ListView;

/**
 * Interceptor class for @see \Amasty\Amp\Block\Product\Content\View\Review\ListView
 */
class Interceptor extends \Amasty\Amp\Block\Product\Content\View\Review\ListView implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Block\Product\Context $context, \Magento\Framework\Url\EncoderInterface $urlEncoder, \Magento\Framework\Json\EncoderInterface $jsonEncoder, \Magento\Framework\Stdlib\StringUtils $string, \Magento\Catalog\Helper\Product $productHelper, \Magento\Catalog\Model\ProductTypes\ConfigInterface $productTypeConfig, \Magento\Framework\Locale\FormatInterface $localeFormat, \Magento\Customer\Model\Session $customerSession, \Magento\Catalog\Api\ProductRepositoryInterface $productRepository, \Magento\Framework\Pricing\PriceCurrencyInterface $priceCurrency, \Magento\Review\Model\ResourceModel\Review\CollectionFactory $collectionFactory, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $urlEncoder, $jsonEncoder, $string, $productHelper, $productTypeConfig, $localeFormat, $customerSession, $productRepository, $priceCurrency, $collectionFactory, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function canEmailToFriend()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canEmailToFriend');
        if (!$pluginInfo) {
            return parent::canEmailToFriend();
        } else {
            return $this->___callPlugins('canEmailToFriend', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function shouldRenderQuantity()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'shouldRenderQuantity');
        if (!$pluginInfo) {
            return parent::shouldRenderQuantity();
        } else {
            return $this->___callPlugins('shouldRenderQuantity', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getQuantityValidators()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getQuantityValidators');
        if (!$pluginInfo) {
            return parent::getQuantityValidators();
        } else {
            return $this->___callPlugins('getQuantityValidators', func_get_args(), $pluginInfo);
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
}
