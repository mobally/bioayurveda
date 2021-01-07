<?php
namespace Amasty\Feed\Block\Adminhtml\GoogleWizard\Edit\Tab\Optional;

/**
 * Interceptor class for @see \Amasty\Feed\Block\Adminhtml\GoogleWizard\Edit\Tab\Optional
 */
class Interceptor extends \Amasty\Feed\Block\Adminhtml\GoogleWizard\Edit\Tab\Optional implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Amasty\Feed\Model\GoogleWizard $googleWizard, \Amasty\Feed\Model\RegistryContainer $registryContainer, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $googleWizard, $registryContainer, $data);
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
