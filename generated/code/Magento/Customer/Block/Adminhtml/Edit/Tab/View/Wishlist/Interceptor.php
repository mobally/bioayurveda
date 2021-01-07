<?php
namespace Magento\Customer\Block\Adminhtml\Edit\Tab\View\Wishlist;

/**
 * Interceptor class for @see \Magento\Customer\Block\Adminhtml\Edit\Tab\View\Wishlist
 */
class Interceptor extends \Magento\Customer\Block\Adminhtml\Edit\Tab\View\Wishlist implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Backend\Helper\Data $backendHelper, \Magento\Wishlist\Model\ResourceModel\Item\CollectionFactory $collectionFactory, \Magento\Framework\Registry $coreRegistry, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $backendHelper, $collectionFactory, $coreRegistry, $data);
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
