<?php
namespace Amasty\VisualMerchCore\Model\Indexer\Catalog\Product\Eav;

/**
 * Interceptor class for @see \Amasty\VisualMerchCore\Model\Indexer\Catalog\Product\Eav
 */
class Interceptor extends \Amasty\VisualMerchCore\Model\Indexer\Catalog\Product\Eav implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Amasty\VisualMerchCore\Model\Indexer\Catalog\Product\Eav\Action\Row $productEavIndexerRow, \Amasty\VisualMerchCore\Model\Indexer\Catalog\Product\Eav\Action\Rows $productEavIndexerRows, \Amasty\VisualMerchCore\Model\Indexer\Catalog\Product\Eav\Action\Full $productEavIndexerFull)
    {
        $this->___init();
        parent::__construct($productEavIndexerRow, $productEavIndexerRows, $productEavIndexerFull);
    }

    /**
     * {@inheritdoc}
     */
    public function executeFull()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'executeFull');
        if (!$pluginInfo) {
            return parent::executeFull();
        } else {
            return $this->___callPlugins('executeFull', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function executeList(array $ids)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'executeList');
        if (!$pluginInfo) {
            return parent::executeList($ids);
        } else {
            return $this->___callPlugins('executeList', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function executeRow($id)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'executeRow');
        if (!$pluginInfo) {
            return parent::executeRow($id);
        } else {
            return $this->___callPlugins('executeRow', func_get_args(), $pluginInfo);
        }
    }
}
