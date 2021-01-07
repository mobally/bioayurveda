<?php
namespace Sparsh\MobileNumberLogin\Block\Form\UpdateMobileNumber;

/**
 * Interceptor class for @see \Sparsh\MobileNumberLogin\Block\Form\UpdateMobileNumber
 */
class Interceptor extends \Sparsh\MobileNumberLogin\Block\Form\UpdateMobileNumber implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Customer\Model\Session $customerSession, \Magento\Newsletter\Model\SubscriberFactory $subscriberFactory, \Magento\Customer\Api\CustomerRepositoryInterface $customerRepository, \Magento\Customer\Api\AccountManagementInterface $customerAccountManagement, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $customerSession, $subscriberFactory, $customerRepository, $customerAccountManagement, $data);
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
