<?php
namespace WeltPixel\FullPageScroll\Block\FullPageScroll;

/**
 * Interceptor class for @see \WeltPixel\FullPageScroll\Block\FullPageScroll
 */
class Interceptor extends \WeltPixel\FullPageScroll\Block\FullPageScroll implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Cms\Model\ResourceModel\Block\CollectionFactory $blockColFactory, \Magento\Cms\Api\PageRepositoryInterface $pageRepository, \Magento\Cms\Model\Template\FilterProvider $filterProvider, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $blockColFactory, $pageRepository, $filterProvider, $data);
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
