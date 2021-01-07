<?php
namespace WeltPixel\EnhancedEmail\Block\Order\Email\Items\GroupedItems;

/**
 * Interceptor class for @see \WeltPixel\EnhancedEmail\Block\Order\Email\Items\GroupedItems
 */
class Interceptor extends \WeltPixel\EnhancedEmail\Block\Order\Email\Items\GroupedItems implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Catalog\Block\Product\ImageBuilder $imageBuilder, \WeltPixel\EnhancedEmail\Helper\Data $wpHelper, \Magento\Catalog\Api\ProductRepositoryInterface $productRepository, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $imageBuilder, $wpHelper, $productRepository, $data);
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
