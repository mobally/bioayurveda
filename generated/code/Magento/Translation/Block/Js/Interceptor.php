<?php
namespace Magento\Translation\Block\Js;

/**
 * Interceptor class for @see \Magento\Translation\Block\Js
 */
class Interceptor extends \Magento\Translation\Block\Js implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Translation\Model\Js\Config $config, \Magento\Translation\Model\FileManager $fileManager, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $config, $fileManager, $data);
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
