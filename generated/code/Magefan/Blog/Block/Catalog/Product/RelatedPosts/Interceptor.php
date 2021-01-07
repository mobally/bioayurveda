<?php
namespace Magefan\Blog\Block\Catalog\Product\RelatedPosts;

/**
 * Interceptor class for @see \Magefan\Blog\Block\Catalog\Product\RelatedPosts
 */
class Interceptor extends \Magefan\Blog\Block\Catalog\Product\RelatedPosts implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Framework\Registry $coreRegistry, \Magento\Cms\Model\Template\FilterProvider $filterProvider, \Magefan\Blog\Model\ResourceModel\Post\CollectionFactory $postCollectionFactory, \Magefan\Blog\Model\Url $url, array $data = [], $config = null)
    {
        $this->___init();
        parent::__construct($context, $coreRegistry, $filterProvider, $postCollectionFactory, $url, $data, $config);
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
