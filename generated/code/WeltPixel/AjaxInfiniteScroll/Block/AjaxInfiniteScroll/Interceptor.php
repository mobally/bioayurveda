<?php
namespace WeltPixel\AjaxInfiniteScroll\Block\AjaxInfiniteScroll;

/**
 * Interceptor class for @see \WeltPixel\AjaxInfiniteScroll\Block\AjaxInfiniteScroll
 */
class Interceptor extends \WeltPixel\AjaxInfiniteScroll\Block\AjaxInfiniteScroll implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \WeltPixel\AjaxInfiniteScroll\Helper\Data $helper, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $helper, $data);
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
