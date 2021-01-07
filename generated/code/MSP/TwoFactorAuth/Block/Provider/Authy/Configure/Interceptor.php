<?php
namespace MSP\TwoFactorAuth\Block\Provider\Authy\Configure;

/**
 * Interceptor class for @see \MSP\TwoFactorAuth\Block\Provider\Authy\Configure
 */
class Interceptor extends \MSP\TwoFactorAuth\Block\Provider\Authy\Configure implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \MSP\TwoFactorAuth\Model\ResourceModel\Country\CollectionFactory $countryCollectionFactory, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $countryCollectionFactory, $data);
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
