<?php
namespace WeltPixel\Multistore\Block\Adminhtml\System\Config\Form\IsPearl;

/**
 * Interceptor class for @see \WeltPixel\Multistore\Block\Adminhtml\System\Config\Form\IsPearl
 */
class Interceptor extends \WeltPixel\Multistore\Block\Adminhtml\System\Config\Form\IsPearl implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \WeltPixel\Backend\Helper\Utility $utilityHelper, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $utilityHelper, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function render(\Magento\Framework\Data\Form\Element\AbstractElement $element)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'render');
        if (!$pluginInfo) {
            return parent::render($element);
        } else {
            return $this->___callPlugins('render', func_get_args(), $pluginInfo);
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
