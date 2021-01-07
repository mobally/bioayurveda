<?php
namespace Magento\Theme\Block\Html\Title;

/**
 * Interceptor class for @see \Magento\Theme\Block\Html\Title
 */
class Interceptor extends \Magento\Theme\Block\Html\Title implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getPageHeading()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPageHeading');
        if (!$pluginInfo) {
            return parent::getPageHeading();
        } else {
            return $this->___callPlugins('getPageHeading', func_get_args(), $pluginInfo);
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
