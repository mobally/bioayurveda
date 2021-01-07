<?php
namespace WeltPixel\OwlCarouselSlider\Block\Adminhtml\Banner\Grid;

/**
 * Interceptor class for @see \WeltPixel\OwlCarouselSlider\Block\Adminhtml\Banner\Grid
 */
class Interceptor extends \WeltPixel\OwlCarouselSlider\Block\Adminhtml\Banner\Grid implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Backend\Helper\Data $backendHelper, \WeltPixel\OwlCarouselSlider\Model\ResourceModel\Banner\CollectionFactory $bannerCollectionFactory, \WeltPixel\OwlCarouselSlider\Model\ResourceModel\Slider\CollectionFactory $sliderCollectionFactory, \WeltPixel\OwlCarouselSlider\Model\Status $status, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $backendHelper, $bannerCollectionFactory, $sliderCollectionFactory, $status, $data);
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
