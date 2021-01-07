<?php
namespace WeltPixel\EnhancedEmail\Block\MarkupOrder;

/**
 * Interceptor class for @see \WeltPixel\EnhancedEmail\Block\MarkupOrder
 */
class Interceptor extends \WeltPixel\EnhancedEmail\Block\MarkupOrder implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Catalog\Model\ProductRepository $productRepository, \WeltPixel\EnhancedEmail\Helper\Data $helper, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $productRepository, $helper, $data);
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
