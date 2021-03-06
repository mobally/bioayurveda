<?php
namespace Magento\Paypal\Block\Adminhtml\System\Config\ResolutionRules;

/**
 * Interceptor class for @see \Magento\Paypal\Block\Adminhtml\System\Config\ResolutionRules
 */
class Interceptor extends \Magento\Paypal\Block\Adminhtml\System\Config\ResolutionRules implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Paypal\Model\Config\Rules\Reader $rulesReader, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $rulesReader, $data);
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
