<?php
namespace Magento\Catalog\Block\Breadcrumbs;

/**
 * Interceptor class for @see \Magento\Catalog\Block\Breadcrumbs
 */
class Interceptor extends \Magento\Catalog\Block\Breadcrumbs implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Catalog\Helper\Data $catalogData, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $catalogData, $data);
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
