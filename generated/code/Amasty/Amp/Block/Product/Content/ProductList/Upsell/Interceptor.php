<?php
namespace Amasty\Amp\Block\Product\Content\ProductList\Upsell;

/**
 * Interceptor class for @see \Amasty\Amp\Block\Product\Content\ProductList\Upsell
 */
class Interceptor extends \Amasty\Amp\Block\Product\Content\ProductList\Upsell implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Framework\ObjectManagerInterface $objectManager, \Amasty\Amp\Model\UrlConfigProvider $urlConfigProvider, $name = '', array $data = [])
    {
        $this->___init();
        parent::__construct($context, $objectManager, $urlConfigProvider, $name, $data);
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
