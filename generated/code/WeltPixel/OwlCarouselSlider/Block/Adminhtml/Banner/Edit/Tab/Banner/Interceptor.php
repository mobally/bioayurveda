<?php
namespace WeltPixel\OwlCarouselSlider\Block\Adminhtml\Banner\Edit\Tab\Banner;

/**
 * Interceptor class for @see \WeltPixel\OwlCarouselSlider\Block\Adminhtml\Banner\Edit\Tab\Banner
 */
class Interceptor extends \WeltPixel\OwlCarouselSlider\Block\Adminhtml\Banner\Edit\Tab\Banner implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Magento\Framework\DataObjectFactory $objectFactory, \WeltPixel\OwlCarouselSlider\Model\Banner $bannerModel, \WeltPixel\OwlCarouselSlider\Model\SliderFactory $sliderFactory, \WeltPixel\OwlCarouselSlider\Model\Status $status, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $objectFactory, $bannerModel, $sliderFactory, $status, $data);
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
