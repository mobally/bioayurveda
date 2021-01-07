<?php
namespace Magento\Paypal\Block\Bml\Shortcut;

/**
 * Interceptor class for @see \Magento\Paypal\Block\Bml\Shortcut
 */
class Interceptor extends \Magento\Paypal\Block\Bml\Shortcut implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Payment\Helper\Data $paymentData, \Magento\Framework\Math\Random $mathRandom, \Magento\Paypal\Helper\Shortcut\ValidatorInterface $shortcutValidator, $paymentMethodCode, $startAction, $alias, $bmlMethodCode, $shortcutTemplate, array $data = [], ?\Magento\Paypal\Model\ConfigFactory $config = null)
    {
        $this->___init();
        parent::__construct($context, $paymentData, $mathRandom, $shortcutValidator, $paymentMethodCode, $startAction, $alias, $bmlMethodCode, $shortcutTemplate, $data, $config);
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
