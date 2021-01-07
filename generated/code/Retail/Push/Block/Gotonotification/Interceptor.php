<?php
namespace Retail\Push\Block\Gotonotification;

/**
 * Interceptor class for @see \Retail\Push\Block\Gotonotification
 */
class Interceptor extends \Retail\Push\Block\Gotonotification implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Retail\Analytics\Helper\ConfigData $raaHelper, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Customer\Model\SessionFactory $customerSession, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $raaHelper, $storeManager, $customerSession, $data);
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
