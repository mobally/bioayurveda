<?php
namespace Amasty\Feed\Block\Adminhtml\GoogleWizard\Edit\Tab\General;

/**
 * Interceptor class for @see \Amasty\Feed\Block\Adminhtml\GoogleWizard\Edit\Tab\General
 */
class Interceptor extends \Amasty\Feed\Block\Adminhtml\GoogleWizard\Edit\Tab\General implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Amasty\Feed\Model\RegistryContainer $registryContainer, \Amasty\Feed\Model\GoogleWizard $googleWizard, \Magento\Store\Model\System\Store $systemStore, \Magento\Directory\Model\CurrencyFactory $currencyFactory, \Amasty\Feed\Model\FeedRepository $feedRepository, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $registryContainer, $googleWizard, $systemStore, $currencyFactory, $feedRepository, $data);
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
