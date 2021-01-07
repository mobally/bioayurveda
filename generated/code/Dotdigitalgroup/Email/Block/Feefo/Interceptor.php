<?php
namespace Dotdigitalgroup\Email\Block\Feefo;

/**
 * Interceptor class for @see \Dotdigitalgroup\Email\Block\Feefo
 */
class Interceptor extends \Dotdigitalgroup\Email\Block\Feefo implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Dotdigitalgroup\Email\Helper\Data $helper, \Magento\Framework\Pricing\Helper\Data $priceHelper, \Dotdigitalgroup\Email\Model\ResourceModel\Review $review, \Magento\Quote\Model\ResourceModel\Quote $quoteResource, \Magento\Quote\Model\QuoteFactory $quoteFactory, \Magento\Framework\Filesystem\DriverInterface $driver, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $helper, $priceHelper, $review, $quoteResource, $quoteFactory, $driver, $data);
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
