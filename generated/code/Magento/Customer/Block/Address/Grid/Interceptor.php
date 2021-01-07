<?php
namespace Magento\Customer\Block\Address\Grid;

/**
 * Interceptor class for @see \Magento\Customer\Block\Address\Grid
 */
class Interceptor extends \Magento\Customer\Block\Address\Grid implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Customer\Helper\Session\CurrentCustomer $currentCustomer, \Magento\Customer\Model\ResourceModel\Address\CollectionFactory $addressCollectionFactory, \Magento\Directory\Model\CountryFactory $countryFactory, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $currentCustomer, $addressCollectionFactory, $countryFactory, $data);
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
