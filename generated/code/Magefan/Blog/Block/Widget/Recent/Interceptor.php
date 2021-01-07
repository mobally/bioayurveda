<?php
namespace Magefan\Blog\Block\Widget\Recent;

/**
 * Interceptor class for @see \Magefan\Blog\Block\Widget\Recent
 */
class Interceptor extends \Magefan\Blog\Block\Widget\Recent implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Framework\Registry $coreRegistry, \Magento\Cms\Model\Template\FilterProvider $filterProvider, \Magefan\Blog\Model\ResourceModel\Post\CollectionFactory $postCollectionFactory, \Magefan\Blog\Model\Url $url, \Magefan\Blog\Model\CategoryFactory $categoryFactory, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $coreRegistry, $filterProvider, $postCollectionFactory, $url, $categoryFactory, $data);
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
