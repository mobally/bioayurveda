<?php
namespace Magefan\Blog\Block\Post\View\NextPrev;

/**
 * Interceptor class for @see \Magefan\Blog\Block\Post\View\NextPrev
 */
class Interceptor extends \Magefan\Blog\Block\Post\View\NextPrev implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magefan\Blog\Model\ResourceModel\Post\CollectionFactory $postCollectionFactory, \Magento\Framework\Registry $coreRegistry, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $postCollectionFactory, $coreRegistry, $data);
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
