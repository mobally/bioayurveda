<?php
namespace Magento\Paypal\Block\Payflow\Customer\CardRenderer;

/**
 * Interceptor class for @see \Magento\Paypal\Block\Payflow\Customer\CardRenderer
 */
class Interceptor extends \Magento\Paypal\Block\Payflow\Customer\CardRenderer implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Payment\Model\CcConfigProvider $iconsProvider, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $iconsProvider, $data);
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
