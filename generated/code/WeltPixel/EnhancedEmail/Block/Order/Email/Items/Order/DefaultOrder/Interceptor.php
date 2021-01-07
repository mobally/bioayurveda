<?php
namespace WeltPixel\EnhancedEmail\Block\Order\Email\Items\Order\DefaultOrder;

/**
 * Interceptor class for @see \WeltPixel\EnhancedEmail\Block\Order\Email\Items\Order\DefaultOrder
 */
class Interceptor extends \WeltPixel\EnhancedEmail\Block\Order\Email\Items\Order\DefaultOrder implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Block\Product\ImageBuilder $imageBuilder, \WeltPixel\EnhancedEmail\Helper\Data $wpHelper, \Magento\Catalog\Api\ProductRepositoryInterface $productRepository, \Magento\Catalog\Helper\Image $imageHelper, \Magento\Framework\View\Element\Template\Context $context, array $data = [])
    {
        $this->___init();
        parent::__construct($imageBuilder, $wpHelper, $productRepository, $imageHelper, $context, $data);
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
