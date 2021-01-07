<?php
namespace WeltPixel\CmsBlockScheduler\Block\Adminhtml\Tag\Edit\Tab\Tag;

/**
 * Interceptor class for @see \WeltPixel\CmsBlockScheduler\Block\Adminhtml\Tag\Edit\Tab\Tag
 */
class Interceptor extends \WeltPixel\CmsBlockScheduler\Block\Adminhtml\Tag\Edit\Tab\Tag implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Magento\Framework\DataObjectFactory $objectFactory, \WeltPixel\CmsBlockScheduler\Model\Tag $tag, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $objectFactory, $tag, $data);
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
