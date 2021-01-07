<?php
namespace Yotpo\Yotpo\Block\Adminhtml\Dashboard\Tab\YotpoReviews;

/**
 * Interceptor class for @see \Yotpo\Yotpo\Block\Adminhtml\Dashboard\Tab\YotpoReviews
 */
class Interceptor extends \Yotpo\Yotpo\Block\Adminhtml\Dashboard\Tab\YotpoReviews implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Reports\Model\ResourceModel\Order\CollectionFactory $collectionFactory, \Yotpo\Yotpo\Model\Config $yotpoConfig, \Yotpo\Yotpo\Model\Api\AccountUsages $yotpoApi, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $collectionFactory, $yotpoConfig, $yotpoApi, $data);
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
