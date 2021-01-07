<?php
namespace Magefan\Blog\Block\Adminhtml\Import\Wordpress;

/**
 * Interceptor class for @see \Magefan\Blog\Block\Adminhtml\Import\Wordpress
 */
class Interceptor extends \Magefan\Blog\Block\Adminhtml\Import\Wordpress implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Widget\Context $context, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $data);
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
