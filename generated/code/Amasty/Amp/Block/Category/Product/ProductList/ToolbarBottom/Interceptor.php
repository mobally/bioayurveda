<?php
namespace Amasty\Amp\Block\Category\Product\ProductList\ToolbarBottom;

/**
 * Interceptor class for @see \Amasty\Amp\Block\Category\Product\ProductList\ToolbarBottom
 */
class Interceptor extends \Amasty\Amp\Block\Category\Product\ProductList\ToolbarBottom implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, array $data = [])
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
