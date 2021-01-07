<?php
namespace Magento\Payment\Block\Transparent\Redirect;

/**
 * Interceptor class for @see \Magento\Payment\Block\Transparent\Redirect
 */
class Interceptor extends \Magento\Payment\Block\Transparent\Redirect implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Framework\UrlInterface $url, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $url, $data);
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
