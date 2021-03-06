<?php
namespace Magento\Catalog\Block\Adminhtml\Product\Edit\Action\Attribute;

/**
 * Interceptor class for @see \Magento\Catalog\Block\Adminhtml\Product\Edit\Action\Attribute
 */
class Interceptor extends \Magento\Catalog\Block\Adminhtml\Product\Edit\Action\Attribute implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Catalog\Helper\Product\Edit\Action\Attribute $helperActionAttribute, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $helperActionAttribute, $data);
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
