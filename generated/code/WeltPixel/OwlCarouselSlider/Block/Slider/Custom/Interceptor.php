<?php
namespace WeltPixel\OwlCarouselSlider\Block\Slider\Custom;

/**
 * Interceptor class for @see \WeltPixel\OwlCarouselSlider\Block\Slider\Custom
 */
class Interceptor extends \WeltPixel\OwlCarouselSlider\Block\Slider\Custom implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \WeltPixel\OwlCarouselSlider\Helper\Custom $helperCustom, \Magento\Cms\Model\Template\FilterProvider $filterProvider, \WeltPixel\MobileDetect\Helper\Data $mobileHelperData, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $helperCustom, $filterProvider, $mobileHelperData, $data);
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
