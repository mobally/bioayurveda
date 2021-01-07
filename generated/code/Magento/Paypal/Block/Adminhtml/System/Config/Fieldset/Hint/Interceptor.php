<?php
namespace Magento\Paypal\Block\Adminhtml\System\Config\Fieldset\Hint;

/**
 * Interceptor class for @see \Magento\Paypal\Block\Adminhtml\System\Config\Fieldset\Hint
 */
class Interceptor extends \Magento\Paypal\Block\Adminhtml\System\Config\Fieldset\Hint implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, array $data = [])
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
