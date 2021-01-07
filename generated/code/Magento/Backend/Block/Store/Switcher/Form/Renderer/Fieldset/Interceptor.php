<?php
namespace Magento\Backend\Block\Store\Switcher\Form\Renderer\Fieldset;

/**
 * Interceptor class for @see \Magento\Backend\Block\Store\Switcher\Form\Renderer\Fieldset
 */
class Interceptor extends \Magento\Backend\Block\Store\Switcher\Form\Renderer\Fieldset implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, array $data = [])
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
