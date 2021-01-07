<?php
namespace Amasty\Feed\Block\Adminhtml\GoogleWizard\Edit\Tab\Basic;

/**
 * Interceptor class for @see \Amasty\Feed\Block\Adminhtml\GoogleWizard\Edit\Tab\Basic
 */
class Interceptor extends \Amasty\Feed\Block\Adminhtml\GoogleWizard\Edit\Tab\Basic implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Amasty\Feed\Model\GoogleWizard $googleWizard, \Magento\Directory\Model\CurrencyFactory $currencyFactory, \Amasty\Feed\Model\RegistryContainer $registryContainer, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $googleWizard, $currencyFactory, $registryContainer, $data);
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
