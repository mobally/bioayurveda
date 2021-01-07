<?php
namespace Eighteentech\Ingredient\Block\Adminhtml\Ingredient\Edit\Tab\Content;

/**
 * Interceptor class for @see \Eighteentech\Ingredient\Block\Adminhtml\Ingredient\Edit\Tab\Content
 */
class Interceptor extends \Eighteentech\Ingredient\Block\Adminhtml\Ingredient\Edit\Tab\Content implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Magento\Cms\Model\Wysiwyg\Config $wysiwygConfig, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $wysiwygConfig, $data);
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
