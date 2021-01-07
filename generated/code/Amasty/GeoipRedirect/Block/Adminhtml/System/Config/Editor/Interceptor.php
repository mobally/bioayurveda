<?php
namespace Amasty\GeoipRedirect\Block\Adminhtml\System\Config\Editor;

/**
 * Interceptor class for @see \Amasty\GeoipRedirect\Block\Adminhtml\System\Config\Editor
 */
class Interceptor extends \Amasty\GeoipRedirect\Block\Adminhtml\System\Config\Editor implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Cms\Model\Wysiwyg\Config $wysiwygConfig, \Magento\Framework\App\RequestInterface $request, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $wysiwygConfig, $request, $data);
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
