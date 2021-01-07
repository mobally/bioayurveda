<?php
namespace WeltPixel\DesignElements\Block\Adminhtml\Widget\ImageChooser;

/**
 * Interceptor class for @see \WeltPixel\DesignElements\Block\Adminhtml\Widget\ImageChooser
 */
class Interceptor extends \WeltPixel\DesignElements\Block\Adminhtml\Widget\ImageChooser implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Data\Form\Element\Factory $elementFactory, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $elementFactory, $data);
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
