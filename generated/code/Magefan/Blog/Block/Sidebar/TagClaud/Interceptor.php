<?php
namespace Magefan\Blog\Block\Sidebar\TagClaud;

/**
 * Interceptor class for @see \Magefan\Blog\Block\Sidebar\TagClaud
 */
class Interceptor extends \Magefan\Blog\Block\Sidebar\TagClaud implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magefan\Blog\Model\ResourceModel\Tag\CollectionFactory $tagCollectionFactory, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $tagCollectionFactory, $data);
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
