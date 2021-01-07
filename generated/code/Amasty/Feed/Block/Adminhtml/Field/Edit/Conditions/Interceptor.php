<?php
namespace Amasty\Feed\Block\Adminhtml\Field\Edit\Conditions;

/**
 * Interceptor class for @see \Amasty\Feed\Block\Adminhtml\Field\Edit\Conditions
 */
class Interceptor extends \Amasty\Feed\Block\Adminhtml\Field\Edit\Conditions implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Rule\Block\Conditions $conditions, \Magento\Framework\Data\FormFactory $formFactory, \Magento\Framework\App\Request\DataPersistorInterface $dataPersistor, \Magento\Backend\Block\Widget\Form\Renderer\Fieldset $fieldset, \Magento\Framework\App\ProductMetadataInterface $metadata, \Amasty\Feed\Ui\Component\Form\ProductAttributeOptions $attributeOptions, \Amasty\Feed\Api\CustomFieldsRepositoryInterface $cFieldsRepository, \Amasty\Feed\Model\Config\Source\CustomFieldType $customFieldType, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $conditions, $formFactory, $dataPersistor, $fieldset, $metadata, $attributeOptions, $cFieldsRepository, $customFieldType, $data);
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
