<?php
namespace Magento\Framework\Data\Form\FormKey;

/**
 * Interceptor class for @see \Magento\Framework\Data\Form\FormKey
 */
class Interceptor extends \Magento\Framework\Data\Form\FormKey implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Math\Random $mathRandom, \Magento\Framework\Session\SessionManagerInterface $session, \Magento\Framework\Escaper $escaper)
    {
        $this->___init();
        parent::__construct($mathRandom, $session, $escaper);
    }

    /**
     * {@inheritdoc}
     */
    public function getFormKey()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFormKey');
        if (!$pluginInfo) {
            return parent::getFormKey();
        } else {
            return $this->___callPlugins('getFormKey', func_get_args(), $pluginInfo);
        }
    }
}
