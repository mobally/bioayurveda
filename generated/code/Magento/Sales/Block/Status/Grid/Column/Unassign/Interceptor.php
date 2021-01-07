<?php
namespace Magento\Sales\Block\Status\Grid\Column\Unassign;

/**
 * Interceptor class for @see \Magento\Sales\Block\Status\Grid\Column\Unassign
 */
class Interceptor extends \Magento\Sales\Block\Status\Grid\Column\Unassign implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, array $data = [], ?\Magento\Framework\Serialize\Serializer\Json $json = null)
    {
        $this->___init();
        parent::__construct($context, $data, $json);
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
