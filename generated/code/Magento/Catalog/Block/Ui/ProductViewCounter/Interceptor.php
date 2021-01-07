<?php
namespace Magento\Catalog\Block\Ui\ProductViewCounter;

/**
 * Interceptor class for @see \Magento\Catalog\Block\Ui\ProductViewCounter
 */
class Interceptor extends \Magento\Catalog\Block\Ui\ProductViewCounter implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Catalog\Model\ProductRepository $productRepository, \Magento\Catalog\Ui\DataProvider\Product\ProductRenderCollectorComposite $productRenderCollectorComposite, \Magento\Store\Model\StoreManager $storeManager, \Magento\Catalog\Model\ProductRenderFactory $productRenderFactory, \Magento\Framework\EntityManager\Hydrator $hydrator, \Magento\Framework\Serialize\SerializerInterface $serialize, \Magento\Framework\Url $url, \Magento\Framework\Registry $registry, ?\Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig = null)
    {
        $this->___init();
        parent::__construct($context, $productRepository, $productRenderCollectorComposite, $storeManager, $productRenderFactory, $hydrator, $serialize, $url, $registry, $scopeConfig);
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
