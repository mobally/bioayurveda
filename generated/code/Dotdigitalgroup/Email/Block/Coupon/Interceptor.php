<?php
namespace Dotdigitalgroup\Email\Block\Coupon;

/**
 * Interceptor class for @see \Dotdigitalgroup\Email\Block\Coupon
 */
class Interceptor extends \Dotdigitalgroup\Email\Block\Coupon implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Dotdigitalgroup\Email\Helper\Data $helper, \Dotdigitalgroup\Email\Model\SalesRule\DotdigitalCouponRequestProcessorFactory $dotdigitalCouponRequestProcessorFactory, \Dotdigitalgroup\Email\Block\Helper\Font $font, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $helper, $dotdigitalCouponRequestProcessorFactory, $font, $data);
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
