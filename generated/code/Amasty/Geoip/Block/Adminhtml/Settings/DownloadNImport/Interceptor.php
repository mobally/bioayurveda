<?php
namespace Amasty\Geoip\Block\Adminhtml\Settings\DownloadNImport;

/**
 * Interceptor class for @see \Amasty\Geoip\Block\Adminhtml\Settings\DownloadNImport
 */
class Interceptor extends \Amasty\Geoip\Block\Adminhtml\Settings\DownloadNImport implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Amasty\Geoip\Model\Import $import, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $import, $data);
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
