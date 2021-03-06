<?php
namespace Yotpo\Yotpo\Block\Adminhtml\System\Config\Form\Field\Date;

/**
 * Interceptor class for @see \Yotpo\Yotpo\Block\Adminhtml\System\Config\Form\Field\Date
 */
class Interceptor extends \Yotpo\Yotpo\Block\Adminhtml\System\Config\Form\Field\Date implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Yotpo\Yotpo\Model\Config $yotpoConfig, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $yotpoConfig, $data);
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
