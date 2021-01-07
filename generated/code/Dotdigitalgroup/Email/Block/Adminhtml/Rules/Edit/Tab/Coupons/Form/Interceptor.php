<?php
namespace Dotdigitalgroup\Email\Block\Adminhtml\Rules\Edit\Tab\Coupons\Form;

/**
 * Interceptor class for @see \Dotdigitalgroup\Email\Block\Adminhtml\Rules\Edit\Tab\Coupons\Form
 */
class Interceptor extends \Dotdigitalgroup\Email\Block\Adminhtml\Rules\Edit\Tab\Coupons\Form implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Magento\SalesRule\Helper\Coupon $salesRuleCoupon, \Dotdigitalgroup\Email\Helper\Data $helper, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $salesRuleCoupon, $helper, $data);
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
