<?php
namespace WeltPixel\FrontendOptions\Block\ContactForm;

/**
 * Interceptor class for @see \WeltPixel\FrontendOptions\Block\ContactForm
 */
class Interceptor extends \WeltPixel\FrontendOptions\Block\ContactForm implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \WeltPixel\FrontendOptions\Helper\Data $wpHelper, \Magento\Cms\Model\ResourceModel\Block\CollectionFactory $blockCollectionFactory, \Magento\Cms\Model\Template\FilterProvider $filterProvider, \Magento\Cms\Model\BlockFactory $blockFactory, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $wpHelper, $blockCollectionFactory, $filterProvider, $blockFactory, $data);
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
