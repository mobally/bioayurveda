<?php
namespace WeltPixel\RecentlyViewedBar\Block\RecentlyViewed;

/**
 * Interceptor class for @see \WeltPixel\RecentlyViewedBar\Block\RecentlyViewed
 */
class Interceptor extends \WeltPixel\RecentlyViewedBar\Block\RecentlyViewed implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \WeltPixel\RecentlyViewedBar\Helper\Data $wpHelper, \Magento\Framework\App\Request\Http $request, \Magento\Framework\App\ProductMetadataInterface $metadataInterface, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $wpHelper, $request, $metadataInterface, $data);
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
