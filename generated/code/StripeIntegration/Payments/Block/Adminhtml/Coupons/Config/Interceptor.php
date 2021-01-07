<?php
namespace StripeIntegration\Payments\Block\Adminhtml\Coupons\Config;

/**
 * Interceptor class for @see \StripeIntegration\Payments\Block\Adminhtml\Coupons\Config
 */
class Interceptor extends \StripeIntegration\Payments\Block\Adminhtml\Coupons\Config implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\StripeIntegration\Payments\Model\Coupon $coupon, \Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Magento\Rule\Block\Conditions $conditions, \Magento\Backend\Block\Widget\Form\Renderer\Fieldset $rendererFieldset, array $data = [], ?\Magento\SalesRule\Model\RuleFactory $ruleFactory = null)
    {
        $this->___init();
        parent::__construct($coupon, $context, $registry, $formFactory, $conditions, $rendererFieldset, $data, $ruleFactory);
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
