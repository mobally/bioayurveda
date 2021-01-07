<?php
namespace WeltPixel\GoogleTagManager\Block\Core;

/**
 * Interceptor class for @see \WeltPixel\GoogleTagManager\Block\Core
 */
class Interceptor extends \WeltPixel\GoogleTagManager\Block\Core implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \WeltPixel\GoogleTagManager\Helper\Data $helper, \WeltPixel\GoogleTagManager\Model\Storage $storage, \WeltPixel\GoogleTagManager\Model\Dimension $dimensionModel, \WeltPixel\GoogleTagManager\Model\CookieManager $cookieManager, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $helper, $storage, $dimensionModel, $cookieManager, $data);
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
