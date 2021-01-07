<?php
namespace Magento\ConfigurableProduct\Block\Product\Configurable\AttributeSelector;

/**
 * Interceptor class for @see \Magento\ConfigurableProduct\Block\Product\Configurable\AttributeSelector
 */
class Interceptor extends \Magento\ConfigurableProduct\Block\Product\Configurable\AttributeSelector implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $data);
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
