<?php
namespace Magefan\Blog\Block\Tag\Info;

/**
 * Interceptor class for @see \Magefan\Blog\Block\Tag\Info
 */
class Interceptor extends \Magefan\Blog\Block\Tag\Info implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Framework\Registry $coreRegistry, \Magento\Cms\Model\Template\FilterProvider $filterProvider, \Magefan\Blog\Model\Url $url, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $coreRegistry, $filterProvider, $url, $data);
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
