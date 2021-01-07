<?php
namespace Amazon\Payment\Block\PaymentLink;

/**
 * Interceptor class for @see \Amazon\Payment\Block\PaymentLink
 */
class Interceptor extends \Amazon\Payment\Block\PaymentLink implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Amazon\Core\Helper\Data $coreHelper, \Amazon\Core\Helper\CategoryExclusion $categoryExclusionHelper, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $coreHelper, $categoryExclusionHelper, $data);
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
