<?php
namespace WeltPixel\OwlCarouselSlider\Block\Adminhtml\Slider;

/**
 * Interceptor class for @see \WeltPixel\OwlCarouselSlider\Block\Adminhtml\Slider
 */
class Interceptor extends \WeltPixel\OwlCarouselSlider\Block\Adminhtml\Slider implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Widget\Context $context, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $data);
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
