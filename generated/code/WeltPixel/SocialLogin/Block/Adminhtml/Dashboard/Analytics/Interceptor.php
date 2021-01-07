<?php
namespace WeltPixel\SocialLogin\Block\Adminhtml\Dashboard\Analytics;

/**
 * Interceptor class for @see \WeltPixel\SocialLogin\Block\Adminhtml\Dashboard\Analytics
 */
class Interceptor extends \WeltPixel\SocialLogin\Block\Adminhtml\Dashboard\Analytics implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \WeltPixel\SocialLogin\Model\Analytics $analitycs, \WeltPixel\SocialLogin\Model\Report $report, \Magento\Framework\Pricing\PriceCurrencyInterface $priceCurrency, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $analitycs, $report, $priceCurrency, $data);
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
