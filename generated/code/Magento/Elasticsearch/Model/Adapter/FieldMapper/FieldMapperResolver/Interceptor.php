<?php
namespace Magento\Elasticsearch\Model\Adapter\FieldMapper\FieldMapperResolver;

/**
 * Interceptor class for @see \Magento\Elasticsearch\Model\Adapter\FieldMapper\FieldMapperResolver
 */
class Interceptor extends \Magento\Elasticsearch\Model\Adapter\FieldMapper\FieldMapperResolver implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, array $fieldMappers = [])
    {
        $this->___init();
        parent::__construct($objectManager, $fieldMappers);
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
