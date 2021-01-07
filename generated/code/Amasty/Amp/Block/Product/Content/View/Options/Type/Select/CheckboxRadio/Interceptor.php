<?php
namespace Amasty\Amp\Block\Product\Content\View\Options\Type\Select\CheckboxRadio;

/**
 * Interceptor class for @see \Amasty\Amp\Block\Product\Content\View\Options\Type\Select\CheckboxRadio
 */
class Interceptor extends \Amasty\Amp\Block\Product\Content\View\Options\Type\Select\CheckboxRadio implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Framework\Pricing\Helper\Data $pricingHelper, \Magento\Catalog\Helper\Data $catalogData, \Magento\Framework\Pricing\PriceCurrencyInterface $priceCurrency, \Amasty\Amp\Model\ConfigProvider $configProvider, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $pricingHelper, $catalogData, $priceCurrency, $configProvider, $data);
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
