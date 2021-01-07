<?php
namespace Retail\Push\Block\Popup;

/**
 * Interceptor class for @see \Retail\Push\Block\Popup
 */
class Interceptor extends \Retail\Push\Block\Popup implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Retail\Analytics\Helper\ConfigData $raaHelper, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Customer\Model\SessionFactory $customerSession, \Magento\Framework\Module\Dir\Reader $moduleReader, \Magento\Framework\Data\Form\FormKey $FormKey, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $raaHelper, $storeManager, $customerSession, $moduleReader, $FormKey, $data);
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
