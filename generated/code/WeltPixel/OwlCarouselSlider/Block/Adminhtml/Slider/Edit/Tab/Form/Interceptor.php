<?php
namespace WeltPixel\OwlCarouselSlider\Block\Adminhtml\Slider\Edit\Tab\Form;

/**
 * Interceptor class for @see \WeltPixel\OwlCarouselSlider\Block\Adminhtml\Slider\Edit\Tab\Form
 */
class Interceptor extends \WeltPixel\OwlCarouselSlider\Block\Adminhtml\Slider\Edit\Tab\Form implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \WeltPixel\OwlCarouselSlider\Helper\Data $bannersliderHelper, \Magento\Config\Model\Config\Structure\Element\Dependency\FieldFactory $fieldFactory, \WeltPixel\OwlCarouselSlider\Model\Status $status, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $bannersliderHelper, $fieldFactory, $status, $data);
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
