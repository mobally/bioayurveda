<?php
namespace Amasty\Amp\Block\Product\Content\ProductList\Pure;

/**
 * Interceptor class for @see \Amasty\Amp\Block\Product\Content\ProductList\Pure
 */
class Interceptor extends \Amasty\Amp\Block\Product\Content\ProductList\Pure implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Framework\ObjectManagerInterface $objectManager, $name = '', array $data = [])
    {
        $this->___init();
        parent::__construct($context, $objectManager, $name, $data);
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
