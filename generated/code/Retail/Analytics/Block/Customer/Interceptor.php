<?php
namespace Retail\Analytics\Block\Customer;

/**
 * Interceptor class for @see \Retail\Analytics\Block\Customer
 */
class Interceptor extends \Retail\Analytics\Block\Customer implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Customer\Api\CustomerRepositoryInterface $customerRepository, \Magento\Customer\Model\SessionFactory $customerSession, \Magento\Customer\Helper\Session\CurrentCustomer $currentCustomer, \Magento\Framework\Stdlib\CookieManagerInterface $cookieManager, \Magento\Framework\View\Element\Template\Context $context, array $data = [])
    {
        $this->___init();
        parent::__construct($customerRepository, $customerSession, $currentCustomer, $cookieManager, $context, $data);
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
