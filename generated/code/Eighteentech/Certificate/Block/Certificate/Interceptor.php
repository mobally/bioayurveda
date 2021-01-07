<?php
namespace Eighteentech\Certificate\Block\Certificate;

/**
 * Interceptor class for @see \Eighteentech\Certificate\Block\Certificate
 */
class Interceptor extends \Eighteentech\Certificate\Block\Certificate implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Eighteentech\Certificate\Model\ResourceModel\Certificate\CollectionFactory $collectionFactory, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\Registry $registry, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $collectionFactory, $storeManager, $registry, $data);
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
