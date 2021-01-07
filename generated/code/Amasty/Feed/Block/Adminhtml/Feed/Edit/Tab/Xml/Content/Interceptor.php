<?php
namespace Amasty\Feed\Block\Adminhtml\Feed\Edit\Tab\Xml\Content;

/**
 * Interceptor class for @see \Amasty\Feed\Block\Adminhtml\Feed\Edit\Tab\Xml\Content
 */
class Interceptor extends \Amasty\Feed\Block\Adminhtml\Feed\Edit\Tab\Xml\Content implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Amasty\Feed\Model\Export\Product $export, \Amasty\Feed\Model\Category\ResourceModel\CollectionFactory $categoryCollectionFactory, \Amasty\Feed\Model\Field\ResourceModel\CollectionFactory $fieldCollection, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $export, $categoryCollectionFactory, $fieldCollection, $data);
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
