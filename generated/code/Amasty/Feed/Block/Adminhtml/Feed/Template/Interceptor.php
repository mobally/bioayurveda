<?php
namespace Amasty\Feed\Block\Adminhtml\Feed\Template;

/**
 * Interceptor class for @see \Amasty\Feed\Block\Adminhtml\Feed\Template
 */
class Interceptor extends \Amasty\Feed\Block\Adminhtml\Feed\Template implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Widget\Context $context, \Amasty\Feed\Model\ResourceModel\Feed\CollectionFactory $feedCollectionFactory, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $feedCollectionFactory, $data);
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
