<?php
namespace Dotdigitalgroup\Email\Block\Customer\Account\Books;

/**
 * Interceptor class for @see \Dotdigitalgroup\Email\Block\Customer\Account\Books
 */
class Interceptor extends \Dotdigitalgroup\Email\Block\Customer\Account\Books implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Dotdigitalgroup\Email\Helper\Data $helper, \Magento\Customer\Model\Session $customerSession, \Magento\Newsletter\Model\SubscriberFactory $subscriberFactory, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $helper, $customerSession, $subscriberFactory, $data);
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
