<?php
namespace Magento\Elasticsearch\Model\Adapter\DataMapper\ProductDataMapper;

/**
 * Interceptor class for @see \Magento\Elasticsearch\Model\Adapter\DataMapper\ProductDataMapper
 */
class Interceptor extends \Magento\Elasticsearch\Model\Adapter\DataMapper\ProductDataMapper implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Elasticsearch\Model\Adapter\Document\Builder $builder, \Magento\Elasticsearch\Model\Adapter\Container\Attribute $attributeContainer, \Magento\Elasticsearch\Model\ResourceModel\Index $resourceIndex, \Magento\Elasticsearch\Model\Adapter\FieldMapperInterface $fieldMapper, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Elasticsearch\Model\Adapter\FieldType\Date $dateFieldType, ?\Magento\Elasticsearch\Model\Adapter\FieldMapper\Product\AttributeProvider $attributeAdapterProvider = null, ?\Magento\Elasticsearch\Model\Adapter\FieldMapper\Product\FieldProvider\FieldName\ResolverInterface $fieldNameResolver = null)
    {
        $this->___init();
        parent::__construct($builder, $attributeContainer, $resourceIndex, $fieldMapper, $storeManager, $dateFieldType, $attributeAdapterProvider, $fieldNameResolver);
    }

    /**
     * {@inheritdoc}
     */
    public function map($productId, array $indexData, $storeId, $context = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'map');
        if (!$pluginInfo) {
            return parent::map($productId, $indexData, $storeId, $context);
        } else {
            return $this->___callPlugins('map', func_get_args(), $pluginInfo);
        }
    }
}
