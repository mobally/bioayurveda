<?php
namespace Magento\Checkout\Block\Cart\ValidationMessages;

/**
 * Interceptor class for @see \Magento\Checkout\Block\Cart\ValidationMessages
 */
class Interceptor extends \Magento\Checkout\Block\Cart\ValidationMessages implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Framework\Message\Factory $messageFactory, \Magento\Framework\Message\CollectionFactory $collectionFactory, \Magento\Framework\Message\ManagerInterface $messageManager, \Magento\Framework\View\Element\Message\InterpretationStrategyInterface $interpretationStrategy, \Magento\Checkout\Helper\Cart $cartHelper, \Magento\Framework\Locale\CurrencyInterface $currency, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $messageFactory, $collectionFactory, $messageManager, $interpretationStrategy, $cartHelper, $currency, $data);
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
