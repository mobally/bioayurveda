<?php
namespace Eighteentech\ShippingNotification\Block\Index;

/**
 * Interceptor class for @see \Eighteentech\ShippingNotification\Block\Index
 */
class Interceptor extends \Eighteentech\ShippingNotification\Block\Index implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Store\Model\StoreManagerInterface $storeManager, \Eighteentech\ShippingNotification\Helper\Data $helperData, \Magento\Cms\Api\BlockRepositoryInterface $blockRepository)
    {
        $this->___init();
        parent::__construct($context, $storeManager, $helperData, $blockRepository);
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
