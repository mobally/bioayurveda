<?php
namespace WeltPixel\CmsBlockScheduler\Block\Adminhtml\Tag\Grid;

/**
 * Interceptor class for @see \WeltPixel\CmsBlockScheduler\Block\Adminhtml\Tag\Grid
 */
class Interceptor extends \WeltPixel\CmsBlockScheduler\Block\Adminhtml\Tag\Grid implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Backend\Helper\Data $backendHelper, \WeltPixel\CmsBlockScheduler\Model\ResourceModel\Tag\CollectionFactory $tagCollectionFactory, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $backendHelper, $tagCollectionFactory, $data);
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
