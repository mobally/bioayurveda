<?php
namespace WeltPixel\EnhancedEmail\Block\MarkupNewsletter;

/**
 * Interceptor class for @see \WeltPixel\EnhancedEmail\Block\MarkupNewsletter
 */
class Interceptor extends \WeltPixel\EnhancedEmail\Block\MarkupNewsletter implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Customer\Model\Session $customerSession, \Magento\Newsletter\Model\Subscriber $subscriber, \WeltPixel\EnhancedEmail\Model\SampleDataProvider $sampleDataProvider, \Magento\Backend\Block\Template\Context $context, array $data = [])
    {
        $this->___init();
        parent::__construct($customerSession, $subscriber, $sampleDataProvider, $context, $data);
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
