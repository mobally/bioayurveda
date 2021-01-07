<?php
namespace Mageplaza\Smtp\Block\Adminhtml\AbandonedCart\Edit;

/**
 * Interceptor class for @see \Mageplaza\Smtp\Block\Adminhtml\AbandonedCart\Edit
 */
class Interceptor extends \Mageplaza\Smtp\Block\Adminhtml\AbandonedCart\Edit implements \Magento\Framework\Interception\InterceptorInterface
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
