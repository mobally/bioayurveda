<?php
namespace Amasty\Amp\Block\Category\Navigation\State;

/**
 * Interceptor class for @see \Amasty\Amp\Block\Category\Navigation\State
 */
class Interceptor extends \Amasty\Amp\Block\Category\Navigation\State implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Catalog\Model\Layer\Resolver $layerResolver, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $layerResolver, $data);
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
