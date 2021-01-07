<?php
namespace One97\Paytm\Block\Adminhtml\OrderEdit\Tab\View;

/**
 * Interceptor class for @see \One97\Paytm\Block\Adminhtml\OrderEdit\Tab\View
 */
class Interceptor extends \One97\Paytm\Block\Adminhtml\OrderEdit\Tab\View implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Json\Helper\Data $jsonHelper, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $jsonHelper, $data);
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
