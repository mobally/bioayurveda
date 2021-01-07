<?php
namespace WeltPixel\EnhancedEmail\Block\MarkupInvoice;

/**
 * Interceptor class for @see \WeltPixel\EnhancedEmail\Block\MarkupInvoice
 */
class Interceptor extends \WeltPixel\EnhancedEmail\Block\MarkupInvoice implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Catalog\Model\ProductRepository $productRepository, \Magento\Catalog\Helper\Image $imageHelper, \Magento\Framework\Pricing\Helper\Data $priceHelper, \WeltPixel\EnhancedEmail\Helper\Data $helper, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $productRepository, $imageHelper, $priceHelper, $helper, $data);
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
