<?php
namespace WeltPixel\EnhancedEmail\Block\Sales\Order\Email\Items\Order\Downloadable;

/**
 * Interceptor class for @see \WeltPixel\EnhancedEmail\Block\Sales\Order\Email\Items\Order\Downloadable
 */
class Interceptor extends \WeltPixel\EnhancedEmail\Block\Sales\Order\Email\Items\Order\Downloadable implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Downloadable\Model\Link\PurchasedFactory $purchasedFactory, \Magento\Downloadable\Model\ResourceModel\Link\Purchased\Item\CollectionFactory $itemsFactory, \Magento\Catalog\Block\Product\ImageBuilder $imageBuilder, \WeltPixel\EnhancedEmail\Helper\Data $wpHelper, \Magento\Catalog\Api\ProductRepositoryInterface $productRepository, \Magento\Catalog\Helper\Image $imageHelper, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $purchasedFactory, $itemsFactory, $imageBuilder, $wpHelper, $productRepository, $imageHelper, $data);
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
