<?php
namespace Magento\Backend\Block\Dashboard\Tab\Products\Viewed;

/**
 * Interceptor class for @see \Magento\Backend\Block\Dashboard\Tab\Products\Viewed
 */
class Interceptor extends \Magento\Backend\Block\Dashboard\Tab\Products\Viewed implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Backend\Helper\Data $backendHelper, \Magento\Reports\Model\ResourceModel\Product\CollectionFactory $productsFactory, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $backendHelper, $productsFactory, $data);
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
