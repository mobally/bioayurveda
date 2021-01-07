<?php
namespace WeltPixel\LayeredNavigation\Block\Navigation\State;

/**
 * Interceptor class for @see \WeltPixel\LayeredNavigation\Block\Navigation\State
 */
class Interceptor extends \WeltPixel\LayeredNavigation\Block\Navigation\State implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Catalog\Model\Layer\Resolver $layerResolver, \WeltPixel\LayeredNavigation\Helper\Data $wpHelper, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $layerResolver, $wpHelper, $data);
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
