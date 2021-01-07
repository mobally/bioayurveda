<?php
namespace Amasty\Xlanding\Block\Adminhtml\Page\Edit\Tab\Main;

/**
 * Interceptor class for @see \Amasty\Xlanding\Block\Adminhtml\Page\Edit\Tab\Main
 */
class Interceptor extends \Amasty\Xlanding\Block\Adminhtml\Page\Edit\Tab\Main implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Magento\Store\Model\System\Store $systemStore, \Amasty\Xlanding\Model\Source\Category $categoryModel, \Magento\Catalog\Api\CategoryRepositoryInterface $categoryRepository, \Magento\Config\Model\Config\Structure\Element\Dependency\FieldFactory $dependencyFieldFactory, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $systemStore, $categoryModel, $categoryRepository, $dependencyFieldFactory, $data);
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
