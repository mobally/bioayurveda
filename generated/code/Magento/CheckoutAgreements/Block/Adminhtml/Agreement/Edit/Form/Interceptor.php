<?php
namespace Magento\CheckoutAgreements\Block\Adminhtml\Agreement\Edit\Form;

/**
 * Interceptor class for @see \Magento\CheckoutAgreements\Block\Adminhtml\Agreement\Edit\Form
 */
class Interceptor extends \Magento\CheckoutAgreements\Block\Adminhtml\Agreement\Edit\Form implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Magento\Store\Model\System\Store $systemStore, \Magento\CheckoutAgreements\Model\AgreementModeOptions $agreementModeOptions, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $systemStore, $agreementModeOptions, $data);
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
