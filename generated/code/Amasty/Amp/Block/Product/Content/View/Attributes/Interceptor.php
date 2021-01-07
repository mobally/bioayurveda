<?php
namespace Amasty\Amp\Block\Product\Content\View\Attributes;

/**
 * Interceptor class for @see \Amasty\Amp\Block\Product\Content\View\Attributes
 */
class Interceptor extends \Amasty\Amp\Block\Product\Content\View\Attributes implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Pricing\PriceCurrencyInterface $priceCurrency, \Magento\Catalog\Helper\Output $outputHelper, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $priceCurrency, $outputHelper, $data);
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
