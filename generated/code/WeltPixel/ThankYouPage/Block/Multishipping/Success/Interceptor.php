<?php
namespace WeltPixel\ThankYouPage\Block\Multishipping\Success;

/**
 * Interceptor class for @see \WeltPixel\ThankYouPage\Block\Multishipping\Success
 */
class Interceptor extends \WeltPixel\ThankYouPage\Block\Multishipping\Success implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Multishipping\Model\Checkout\Type\Multishipping $multishipping, \Magento\Checkout\Model\Session $checkoutSession, \Magento\Sales\Model\Order\Address\Renderer $renderer, \Magento\Framework\Stdlib\StringUtils $string, \Magento\Catalog\Block\Product\ImageBuilder $imageBuilder, \Magento\Catalog\Api\ProductRepositoryInterface $productRepository, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Sales\Model\OrderFactory $orderFactory, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $multishipping, $checkoutSession, $renderer, $string, $imageBuilder, $productRepository, $scopeConfig, $orderFactory, $data);
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
