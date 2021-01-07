<?php
namespace Magento\Cms\Block\Adminhtml\Wysiwyg\Images\Content;

/**
 * Interceptor class for @see \Magento\Cms\Block\Adminhtml\Wysiwyg\Images\Content
 */
class Interceptor extends \Magento\Cms\Block\Adminhtml\Wysiwyg\Images\Content implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Widget\Context $context, \Magento\Framework\Json\EncoderInterface $jsonEncoder, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $jsonEncoder, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getOnInsertUrl()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getOnInsertUrl');
        if (!$pluginInfo) {
            return parent::getOnInsertUrl();
        } else {
            return $this->___callPlugins('getOnInsertUrl', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setLayout(\Magento\Framework\View\LayoutInterface $layout)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setLayout');
        if (!$pluginInfo) {
            return parent::setLayout($layout);
        } else {
            return $this->___callPlugins('setLayout', func_get_args(), $pluginInfo);
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
