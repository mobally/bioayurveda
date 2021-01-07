<?php
namespace Magento\Paypal\Block\Express\InContext\Minicart\SmartButton;

/**
 * Interceptor class for @see \Magento\Paypal\Block\Express\InContext\Minicart\SmartButton
 */
class Interceptor extends \Magento\Paypal\Block\Express\InContext\Minicart\SmartButton implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Paypal\Model\ConfigFactory $configFactory, \Magento\Checkout\Model\Session $session, \Magento\Payment\Model\MethodInterface $payment, \Magento\Framework\Serialize\SerializerInterface $serializer, \Magento\Paypal\Model\SmartButtonConfig $smartButtonConfig, \Magento\Framework\UrlInterface $urlBuilder, \Magento\Quote\Model\QuoteIdToMaskedQuoteId $quoteIdToMaskedQuoteId, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $configFactory, $session, $payment, $serializer, $smartButtonConfig, $urlBuilder, $quoteIdToMaskedQuoteId, $data);
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
