<?php
namespace Amasty\Amp\Block\Category\View;

/**
 * Interceptor class for @see \Amasty\Amp\Block\Category\View
 */
class Interceptor extends \Amasty\Amp\Block\Category\View implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Catalog\Model\Layer\Resolver $layerResolver, \Magento\Framework\Registry $registry, \Magento\Catalog\Helper\Category $categoryHelper, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $layerResolver, $registry, $categoryHelper, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrentCategory()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCurrentCategory');
        if (!$pluginInfo) {
            return parent::getCurrentCategory();
        } else {
            return $this->___callPlugins('getCurrentCategory', func_get_args(), $pluginInfo);
        }
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
