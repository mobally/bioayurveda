<?php
namespace Eighteentech\Ingredient\Block\Adminhtml\Ingredient\Grid;

/**
 * Interceptor class for @see \Eighteentech\Ingredient\Block\Adminhtml\Ingredient\Grid
 */
class Interceptor extends \Eighteentech\Ingredient\Block\Adminhtml\Ingredient\Grid implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Backend\Helper\Data $backendHelper, \Eighteentech\Ingredient\Model\Ingredient $ingredient, \Eighteentech\Ingredient\Model\ResourceModel\Ingredient\CollectionFactory $collectionFactory, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $backendHelper, $ingredient, $collectionFactory, $data);
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
