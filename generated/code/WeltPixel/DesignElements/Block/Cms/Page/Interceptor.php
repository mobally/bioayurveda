<?php
namespace WeltPixel\DesignElements\Block\Cms\Page;

/**
 * Interceptor class for @see \WeltPixel\DesignElements\Block\Cms\Page
 */
class Interceptor extends \WeltPixel\DesignElements\Block\Cms\Page implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Cms\Model\PageFactory $pageFactory, \Magento\Cms\Model\Page $page, \WeltPixel\FrontendOptions\Helper\Data $frontendOptionsHelperData, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $pageFactory, $page, $frontendOptionsHelperData, $data);
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
