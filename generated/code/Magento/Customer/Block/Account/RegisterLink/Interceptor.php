<?php
namespace Magento\Customer\Block\Account\RegisterLink;

/**
 * Interceptor class for @see \Magento\Customer\Block\Account\RegisterLink
 */
class Interceptor extends \Magento\Customer\Block\Account\RegisterLink implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Framework\App\Http\Context $httpContext, \Magento\Customer\Model\Registration $registration, \Magento\Customer\Model\Url $customerUrl, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $httpContext, $registration, $customerUrl, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getHref()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getHref');
        if (!$pluginInfo) {
            return parent::getHref();
        } else {
            return $this->___callPlugins('getHref', func_get_args(), $pluginInfo);
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
