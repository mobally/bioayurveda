<?php
namespace Magento\UrlRewrite\Block\Cms\Page\Edit;

/**
 * Interceptor class for @see \Magento\UrlRewrite\Block\Cms\Page\Edit
 */
class Interceptor extends \Magento\UrlRewrite\Block\Cms\Page\Edit implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Widget\Context $context, \Magento\UrlRewrite\Model\UrlRewriteFactory $rewriteFactory, \Magento\Backend\Helper\Data $adminhtmlData, \Magento\Cms\Model\PageFactory $pageFactory, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $rewriteFactory, $adminhtmlData, $pageFactory, $data);
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
