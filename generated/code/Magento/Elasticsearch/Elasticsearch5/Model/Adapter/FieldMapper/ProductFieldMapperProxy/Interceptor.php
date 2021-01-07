<?php
namespace Magento\Elasticsearch\Elasticsearch5\Model\Adapter\FieldMapper\ProductFieldMapperProxy;

/**
 * Interceptor class for @see \Magento\Elasticsearch\Elasticsearch5\Model\Adapter\FieldMapper\ProductFieldMapperProxy
 */
class Interceptor extends \Magento\Elasticsearch\Elasticsearch5\Model\Adapter\FieldMapper\ProductFieldMapperProxy implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\AdvancedSearch\Model\Client\ClientResolver $clientResolver, array $productFieldMappers)
    {
        $this->___init();
        parent::__construct($clientResolver, $productFieldMappers);
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
