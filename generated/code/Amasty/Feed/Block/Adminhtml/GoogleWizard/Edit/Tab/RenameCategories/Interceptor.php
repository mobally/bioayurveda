<?php
namespace Amasty\Feed\Block\Adminhtml\GoogleWizard\Edit\Tab\RenameCategories;

/**
 * Interceptor class for @see \Amasty\Feed\Block\Adminhtml\GoogleWizard\Edit\Tab\RenameCategories
 */
class Interceptor extends \Amasty\Feed\Block\Adminhtml\GoogleWizard\Edit\Tab\RenameCategories implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Amasty\Feed\Model\Category\Repository $repository, \Amasty\Feed\Model\RegistryContainer $registryContainer, \Amasty\Feed\Ui\Component\Form\GoogleTaxonomyOptions $googleTaxonomyOptions, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $repository, $registryContainer, $googleTaxonomyOptions, $data);
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
