<?php
namespace Amazon\Core\Block\Config;

/**
 * Interceptor class for @see \Amazon\Core\Block\Config
 */
class Interceptor extends \Amazon\Core\Block\Config implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Amazon\Core\Helper\Data $coreHelper, \Amazon\Core\Model\AmazonConfig $config, \Magento\Customer\Model\Url $url, \Amazon\Core\Helper\CategoryExclusion $categoryExclusionHelper)
    {
        $this->___init();
        parent::__construct($context, $coreHelper, $config, $url, $categoryExclusionHelper);
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
