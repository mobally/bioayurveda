<?php
namespace Magefan\Blog\Block\Sidebar\Custom;

/**
 * Interceptor class for @see \Magefan\Blog\Block\Sidebar\Custom
 */
class Interceptor extends \Magefan\Blog\Block\Sidebar\Custom implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Cms\Model\Template\FilterProvider $filterProvider, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $filterProvider, $data);
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
