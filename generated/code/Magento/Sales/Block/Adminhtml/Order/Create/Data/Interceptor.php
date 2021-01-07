<?php
namespace Magento\Sales\Block\Adminhtml\Order\Create\Data;

/**
 * Interceptor class for @see \Magento\Sales\Block\Adminhtml\Order\Create\Data
 */
class Interceptor extends \Magento\Sales\Block\Adminhtml\Order\Create\Data implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Backend\Model\Session\Quote $sessionQuote, \Magento\Sales\Model\AdminOrder\Create $orderCreate, \Magento\Framework\Pricing\PriceCurrencyInterface $priceCurrency, \Magento\Directory\Model\CurrencyFactory $currencyFactory, \Magento\Framework\Locale\CurrencyInterface $localeCurrency, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $sessionQuote, $orderCreate, $priceCurrency, $currencyFactory, $localeCurrency, $data);
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
