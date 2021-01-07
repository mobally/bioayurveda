<?php
namespace Amasty\Amp\Block\Product\Content\View\Options\Type\Select;

/**
 * Interceptor class for @see \Amasty\Amp\Block\Product\Content\View\Options\Type\Select
 */
class Interceptor extends \Amasty\Amp\Block\Product\Content\View\Options\Type\Select implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Framework\Pricing\Helper\Data $pricingHelper, \Magento\Catalog\Helper\Data $catalogData, array $data = [], ?\Magento\Catalog\Block\Product\View\Options\Type\Select\CheckableFactory $checkableFactory = null, ?\Magento\Catalog\Block\Product\View\Options\Type\Select\MultipleFactory $multipleFactory = null)
    {
        $this->___init();
        parent::__construct($context, $pricingHelper, $catalogData, $data, $checkableFactory, $multipleFactory);
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
