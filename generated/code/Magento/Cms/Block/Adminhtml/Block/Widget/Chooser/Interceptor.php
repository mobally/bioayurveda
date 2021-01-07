<?php
namespace Magento\Cms\Block\Adminhtml\Block\Widget\Chooser;

/**
 * Interceptor class for @see \Magento\Cms\Block\Adminhtml\Block\Widget\Chooser
 */
class Interceptor extends \Magento\Cms\Block\Adminhtml\Block\Widget\Chooser implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Backend\Helper\Data $backendHelper, \Magento\Cms\Model\BlockFactory $blockFactory, \Magento\Cms\Model\ResourceModel\Block\CollectionFactory $collectionFactory, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $backendHelper, $blockFactory, $collectionFactory, $data);
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
