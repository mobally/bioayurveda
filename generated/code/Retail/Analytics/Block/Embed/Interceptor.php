<?php
namespace Retail\Analytics\Block\Embed;

/**
 * Interceptor class for @see \Retail\Analytics\Block\Embed
 */
class Interceptor extends \Retail\Analytics\Block\Embed implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Retail\Analytics\Helper\ConfigData $raaHelper, \Magento\Directory\Model\Currency $Currency, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\Data\Form\FormKey $FormKey, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $raaHelper, $Currency, $storeManager, $FormKey, $data);
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
