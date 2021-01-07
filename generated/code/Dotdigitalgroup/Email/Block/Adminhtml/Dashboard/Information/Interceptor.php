<?php
namespace Dotdigitalgroup\Email\Block\Adminhtml\Dashboard\Information;

/**
 * Interceptor class for @see \Dotdigitalgroup\Email\Block\Adminhtml\Dashboard\Information
 */
class Interceptor extends \Dotdigitalgroup\Email\Block\Adminhtml\Dashboard\Information implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Dotdigitalgroup\Email\Model\Apiconnector\Test $test, \Dotdigitalgroup\Email\Helper\Data $helper, \Magento\Framework\App\ProductMetadataFactory $productMetadata, \Dotdigitalgroup\Email\Model\ResourceModel\FailedAuth\CollectionFactory $failedAuthCollectionFactory, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $test, $helper, $productMetadata, $failedAuthCollectionFactory, $data);
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
