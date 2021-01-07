<?php
namespace Magento\UrlRewrite\Block\Cms\Page\Grid;

/**
 * Interceptor class for @see \Magento\UrlRewrite\Block\Cms\Page\Grid
 */
class Interceptor extends \Magento\UrlRewrite\Block\Cms\Page\Grid implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Backend\Helper\Data $backendHelper, \Magento\Cms\Model\Page $cmsPage, \Magento\Cms\Model\ResourceModel\Page\CollectionFactory $collectionFactory, \Magento\Framework\View\Model\PageLayout\Config\BuilderInterface $pageLayoutBuilder, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $backendHelper, $cmsPage, $collectionFactory, $pageLayoutBuilder, $data);
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
