<?php
namespace Amasty\Amp\Block\Page\Html\Header\Currency;

/**
 * Interceptor class for @see \Amasty\Amp\Block\Page\Html\Header\Currency
 */
class Interceptor extends \Amasty\Amp\Block\Page\Html\Header\Currency implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Directory\Model\CurrencyFactory $currencyFactory, \Magento\Framework\Data\Helper\PostHelper $postDataHelper, \Magento\Framework\Locale\ResolverInterface $localeResolver, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $currencyFactory, $postDataHelper, $localeResolver, $data);
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
