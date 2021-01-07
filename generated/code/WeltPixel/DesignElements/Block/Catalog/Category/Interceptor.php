<?php
namespace WeltPixel\DesignElements\Block\Catalog\Category;

/**
 * Interceptor class for @see \WeltPixel\DesignElements\Block\Catalog\Category
 */
class Interceptor extends \WeltPixel\DesignElements\Block\Catalog\Category implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \WeltPixel\FrontendOptions\Helper\Data $frontendOptionsHelperData, \Magento\Framework\Registry $registry, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $frontendOptionsHelperData, $registry, $data);
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
