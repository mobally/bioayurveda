<?php
namespace Magento\Customer\Block\Widget\AbstractWidget;

/**
 * Interceptor class for @see \Magento\Customer\Block\Widget\AbstractWidget
 */
class Interceptor extends \Magento\Customer\Block\Widget\AbstractWidget implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Customer\Helper\Address $addressHelper, \Magento\Customer\Api\CustomerMetadataInterface $customerMetadata, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $addressHelper, $customerMetadata, $data);
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
