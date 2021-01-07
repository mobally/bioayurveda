<?php
namespace Amasty\Xlanding\Block\Page;

/**
 * Interceptor class for @see \Amasty\Xlanding\Block\Page
 */
class Interceptor extends \Amasty\Xlanding\Block\Page implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Framework\Registry $coreRegistry, \Magento\Catalog\Model\Template\Filter\Factory $templateFilterFactory, \Magento\Cms\Model\Template\FilterProvider $filterProvider, \Amasty\Xlanding\Model\Page $pageModel, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $coreRegistry, $templateFilterFactory, $filterProvider, $pageModel, $data);
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
