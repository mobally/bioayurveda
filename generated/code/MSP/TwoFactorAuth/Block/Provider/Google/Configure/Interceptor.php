<?php
namespace MSP\TwoFactorAuth\Block\Provider\Google\Configure;

/**
 * Interceptor class for @see \MSP\TwoFactorAuth\Block\Provider\Google\Configure
 */
class Interceptor extends \MSP\TwoFactorAuth\Block\Provider\Google\Configure implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \MSP\TwoFactorAuth\Model\Provider\Engine\Google $google, \Magento\Backend\Model\Auth\Session $session, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $google, $session, $data);
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
