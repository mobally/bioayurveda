<?php
namespace Magefan\Blog\Block\Post\View\Richsnippets;

/**
 * Interceptor class for @see \Magefan\Blog\Block\Post\View\Richsnippets
 */
class Interceptor extends \Magefan\Blog\Block\Post\View\Richsnippets implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magefan\Blog\Model\Post $post, \Magento\Framework\Registry $coreRegistry, \Magento\Cms\Model\Template\FilterProvider $filterProvider, \Magefan\Blog\Model\PostFactory $postFactory, \Magefan\Blog\Model\Url $url, array $data = [], $config = null)
    {
        $this->___init();
        parent::__construct($context, $post, $coreRegistry, $filterProvider, $postFactory, $url, $data, $config);
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
