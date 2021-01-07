<?php
namespace Amasty\Feed\Block\Adminhtml\GoogleWizard\Edit\Tab\ExcludeCategories;

/**
 * Interceptor class for @see \Amasty\Feed\Block\Adminhtml\GoogleWizard\Edit\Tab\ExcludeCategories
 */
class Interceptor extends \Amasty\Feed\Block\Adminhtml\GoogleWizard\Edit\Tab\ExcludeCategories implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Amasty\Feed\Model\Category\Repository $repository, \Amasty\Feed\Model\RegistryContainer $registryContainer, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $repository, $registryContainer, $data);
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
