<?php
namespace Eighteentech\Instagram\Block\Index;

/**
 * Interceptor class for @see \Eighteentech\Instagram\Block\Index
 */
class Interceptor extends \Eighteentech\Instagram\Block\Index implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Store\Model\StoreManagerInterface $storeManager, \Eighteentech\Instagram\Helper\Data $helperData)
    {
        $this->___init();
        parent::__construct($context, $storeManager, $helperData);
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
