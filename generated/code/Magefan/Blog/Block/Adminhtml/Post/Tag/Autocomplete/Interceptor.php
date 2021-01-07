<?php
namespace Magefan\Blog\Block\Adminhtml\Post\Tag\Autocomplete;

/**
 * Interceptor class for @see \Magefan\Blog\Block\Adminhtml\Post\Tag\Autocomplete
 */
class Interceptor extends \Magefan\Blog\Block\Adminhtml\Post\Tag\Autocomplete implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, array $data, \Magento\Framework\Registry $registry)
    {
        $this->___init();
        parent::__construct($context, $data, $registry);
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
