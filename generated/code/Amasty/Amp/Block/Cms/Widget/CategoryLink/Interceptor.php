<?php
namespace Amasty\Amp\Block\Cms\Widget\CategoryLink;

/**
 * Interceptor class for @see \Amasty\Amp\Block\Cms\Widget\CategoryLink
 */
class Interceptor extends \Amasty\Amp\Block\Cms\Widget\CategoryLink implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\UrlRewrite\Model\UrlFinderInterface $urlFinder, ?\Magento\Catalog\Model\ResourceModel\AbstractResource $entityResource = null, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $urlFinder, $entityResource, $data);
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
