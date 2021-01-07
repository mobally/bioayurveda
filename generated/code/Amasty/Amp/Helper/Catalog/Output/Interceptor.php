<?php
namespace Amasty\Amp\Helper\Catalog\Output;

/**
 * Interceptor class for @see \Amasty\Amp\Helper\Catalog\Output
 */
class Interceptor extends \Amasty\Amp\Helper\Catalog\Output implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Helper\Context $context, \Magento\Eav\Model\Config $eavConfig, \Magento\Catalog\Helper\Data $catalogData, \Magento\Framework\Escaper $escaper, $directivePatterns = [], array $handlers = [])
    {
        $this->___init();
        parent::__construct($context, $eavConfig, $catalogData, $escaper, $directivePatterns, $handlers);
    }

    /**
     * {@inheritdoc}
     */
    public function productAttribute($product, $attributeHtml, $attributeName)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'productAttribute');
        if (!$pluginInfo) {
            return parent::productAttribute($product, $attributeHtml, $attributeName);
        } else {
            return $this->___callPlugins('productAttribute', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function categoryAttribute($category, $attributeHtml, $attributeName)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'categoryAttribute');
        if (!$pluginInfo) {
            return parent::categoryAttribute($category, $attributeHtml, $attributeName);
        } else {
            return $this->___callPlugins('categoryAttribute', func_get_args(), $pluginInfo);
        }
    }
}
