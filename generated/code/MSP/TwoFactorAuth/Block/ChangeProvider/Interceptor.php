<?php
namespace MSP\TwoFactorAuth\Block\ChangeProvider;

/**
 * Interceptor class for @see \MSP\TwoFactorAuth\Block\ChangeProvider
 */
class Interceptor extends \MSP\TwoFactorAuth\Block\ChangeProvider implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Backend\Model\Auth\Session $session, \MSP\TwoFactorAuth\Api\TfaInterface $tfa, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $session, $tfa, $data);
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
