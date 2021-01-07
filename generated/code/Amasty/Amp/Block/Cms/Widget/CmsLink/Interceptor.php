<?php
namespace Amasty\Amp\Block\Cms\Widget\CmsLink;

/**
 * Interceptor class for @see \Amasty\Amp\Block\Cms\Widget\CmsLink
 */
class Interceptor extends \Amasty\Amp\Block\Cms\Widget\CmsLink implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Cms\Model\ResourceModel\Page $resourcePage, \Magento\Cms\Helper\Page $cmsPage, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $resourcePage, $cmsPage, $data);
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
