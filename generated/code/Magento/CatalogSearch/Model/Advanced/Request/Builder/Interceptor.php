<?php
namespace Magento\CatalogSearch\Model\Advanced\Request\Builder;

/**
 * Interceptor class for @see \Magento\CatalogSearch\Model\Advanced\Request\Builder
 */
class Interceptor extends \Magento\CatalogSearch\Model\Advanced\Request\Builder implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, \Magento\Framework\Search\Request\Config $config, \Magento\Framework\Search\Request\Binder $binder, \Magento\Framework\Search\Request\Cleaner $cleaner)
    {
        $this->___init();
        parent::__construct($objectManager, $config, $binder, $cleaner);
    }

    /**
     * {@inheritdoc}
     */
    public function create()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'create');
        if (!$pluginInfo) {
            return parent::create();
        } else {
            return $this->___callPlugins('create', func_get_args(), $pluginInfo);
        }
    }
}
