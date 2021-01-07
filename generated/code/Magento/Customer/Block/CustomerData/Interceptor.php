<?php
namespace Magento\Customer\Block\CustomerData;

/**
 * Interceptor class for @see \Magento\Customer\Block\CustomerData
 */
class Interceptor extends \Magento\Customer\Block\CustomerData implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, array $data = [], array $expirableSectionNames = [])
    {
        $this->___init();
        parent::__construct($context, $data, $expirableSectionNames);
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
