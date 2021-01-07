<?php
namespace Magento\ProductAlert\Block\Email\Stock;

/**
 * Interceptor class for @see \Magento\ProductAlert\Block\Email\Stock
 */
class Interceptor extends \Magento\ProductAlert\Block\Email\Stock implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Framework\Filter\Input\MaliciousCode $maliciousCode, \Magento\Framework\Pricing\PriceCurrencyInterface $priceCurrency, \Magento\Catalog\Block\Product\ImageBuilder $imageBuilder, array $data = [], ?\Magento\ProductAlert\Block\Product\ImageProvider $imageProvider = null)
    {
        $this->___init();
        parent::__construct($context, $maliciousCode, $priceCurrency, $imageBuilder, $data, $imageProvider);
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
