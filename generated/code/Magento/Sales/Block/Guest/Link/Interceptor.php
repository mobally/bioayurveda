<?php
namespace Magento\Sales\Block\Guest\Link;

/**
 * Interceptor class for @see \Magento\Sales\Block\Guest\Link
 */
class Interceptor extends \Magento\Sales\Block\Guest\Link implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Framework\App\DefaultPathInterface $defaultPath, \Magento\Framework\App\Http\Context $httpContext, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $defaultPath, $httpContext, $data);
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
