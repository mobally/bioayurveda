<?php
namespace Meetanshi\IndianGst\Block\Sales\Order\Gst;

/**
 * Interceptor class for @see \Meetanshi\IndianGst\Block\Sales\Order\Gst
 */
class Interceptor extends \Meetanshi\IndianGst\Block\Sales\Order\Gst implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Meetanshi\IndianGst\Helper\Data $helper, \Magento\Directory\Model\Currency $currency, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $helper, $currency, $data);
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
