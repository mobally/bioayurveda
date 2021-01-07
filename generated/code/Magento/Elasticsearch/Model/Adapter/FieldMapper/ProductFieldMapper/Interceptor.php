<?php
namespace Magento\Elasticsearch\Model\Adapter\FieldMapper\ProductFieldMapper;

/**
 * Interceptor class for @see \Magento\Elasticsearch\Model\Adapter\FieldMapper\ProductFieldMapper
 */
class Interceptor extends \Magento\Elasticsearch\Model\Adapter\FieldMapper\ProductFieldMapper implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Eav\Model\Config $eavConfig, \Magento\Elasticsearch\Elasticsearch5\Model\Adapter\FieldType $fieldType, \Magento\Customer\Model\Session $customerSession, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\Registry $coreRegistry, ?\Magento\Elasticsearch\Model\Adapter\FieldMapper\Product\FieldProvider\FieldName\ResolverInterface $fieldNameResolver = null, ?\Magento\Elasticsearch\Model\Adapter\FieldMapper\Product\AttributeProvider $attributeAdapterProvider = null, ?\Magento\Elasticsearch\Model\Adapter\FieldMapper\Product\FieldProviderInterface $fieldProvider = null)
    {
        $this->___init();
        parent::__construct($eavConfig, $fieldType, $customerSession, $storeManager, $coreRegistry, $fieldNameResolver, $attributeAdapterProvider, $fieldProvider);
    }

    /**
     * {@inheritdoc}
     */
    public function getAllAttributesTypes($context = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAllAttributesTypes');
        if (!$pluginInfo) {
            return parent::getAllAttributesTypes($context);
        } else {
            return $this->___callPlugins('getAllAttributesTypes', func_get_args(), $pluginInfo);
        }
    }
}
