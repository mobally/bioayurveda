<?php
namespace Magento\Ui\Block\Wysiwyg\ActiveEditor;

/**
 * Interceptor class for @see \Magento\Ui\Block\Wysiwyg\ActiveEditor
 */
class Interceptor extends \Magento\Ui\Block\Wysiwyg\ActiveEditor implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, $availableAdapterPaths = [], array $data = [])
    {
        $this->___init();
        parent::__construct($context, $scopeConfig, $availableAdapterPaths, $data);
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
