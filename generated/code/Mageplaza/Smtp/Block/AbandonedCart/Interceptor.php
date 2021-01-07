<?php
namespace Mageplaza\Smtp\Block\AbandonedCart;

/**
 * Interceptor class for @see \Mageplaza\Smtp\Block\AbandonedCart
 */
class Interceptor extends \Mageplaza\Smtp\Block\AbandonedCart implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Block\Product\Context $context, \Magento\Catalog\Api\ProductRepositoryInterface $productRepository, \Magento\Directory\Model\PriceCurrency $priceCurrency, \Magento\Quote\Model\QuoteFactory $quoteFactory, \Mageplaza\Smtp\Helper\AbandonedCart $helperAbandonedCart, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $productRepository, $priceCurrency, $quoteFactory, $helperAbandonedCart, $data);
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
