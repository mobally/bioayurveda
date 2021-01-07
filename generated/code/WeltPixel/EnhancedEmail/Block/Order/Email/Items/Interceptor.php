<?php
namespace WeltPixel\EnhancedEmail\Block\Order\Email\Items;

/**
 * Interceptor class for @see \WeltPixel\EnhancedEmail\Block\Order\Email\Items
 */
class Interceptor extends \WeltPixel\EnhancedEmail\Block\Order\Email\Items implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\WeltPixel\EnhancedEmail\Helper\Data $wpHelper, \Magento\Framework\View\Element\Template\Context $context, array $data = [])
    {
        $this->___init();
        parent::__construct($wpHelper, $context, $data);
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
