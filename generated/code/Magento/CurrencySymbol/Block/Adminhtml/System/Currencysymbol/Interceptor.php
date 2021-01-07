<?php
namespace Magento\CurrencySymbol\Block\Adminhtml\System\Currencysymbol;

/**
 * Interceptor class for @see \Magento\CurrencySymbol\Block\Adminhtml\System\Currencysymbol
 */
class Interceptor extends \Magento\CurrencySymbol\Block\Adminhtml\System\Currencysymbol implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\CurrencySymbol\Model\System\CurrencysymbolFactory $symbolSystemFactory, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $symbolSystemFactory, $data);
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
