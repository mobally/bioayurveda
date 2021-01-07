<?php
namespace Amasty\Xlanding\Block\Adminhtml\Page\Edit\Tab\Design;

/**
 * Interceptor class for @see \Amasty\Xlanding\Block\Adminhtml\Page\Edit\Tab\Design
 */
class Interceptor extends \Amasty\Xlanding\Block\Adminhtml\Page\Edit\Tab\Design implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Magento\Theme\Model\Layout\Source\Layout $pageLayout, \Magento\Framework\View\Design\Theme\LabelFactory $labelFactory, \Magento\Framework\View\Model\PageLayout\Config\BuilderInterface $pageLayoutBuilder, \Magento\Eav\Model\Config $eavConfig, \Magento\Catalog\Model\Category\Attribute\Source\Page $categoryAttributeSourcePage, \Magento\Cms\Model\Wysiwyg\Config $wysiwygConfig, \Amasty\Xlanding\Model\Rule\Source\Columns $ruleSourceColumns, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $pageLayout, $labelFactory, $pageLayoutBuilder, $eavConfig, $categoryAttributeSourcePage, $wysiwygConfig, $ruleSourceColumns, $data);
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
