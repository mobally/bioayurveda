<?php
namespace Magento\Customer\Block\SectionConfig;

/**
 * Interceptor class for @see \Magento\Customer\Block\SectionConfig
 */
class Interceptor extends \Magento\Customer\Block\SectionConfig implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Framework\Config\DataInterface $sectionConfig, array $data = [], array $clientSideSections = [])
    {
        $this->___init();
        parent::__construct($context, $sectionConfig, $data, $clientSideSections);
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
