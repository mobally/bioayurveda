<?php
namespace Amasty\Feed\Block\Adminhtml\Feed\Edit\Tab\FtpSettings;

/**
 * Interceptor class for @see \Amasty\Feed\Block\Adminhtml\Feed\Edit\Tab\FtpSettings
 */
class Interceptor extends \Amasty\Feed\Block\Adminhtml\Feed\Edit\Tab\FtpSettings implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Amasty\Feed\Model\FormFieldDependencyFactory $dependencyFactory, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $dependencyFactory, $data);
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
