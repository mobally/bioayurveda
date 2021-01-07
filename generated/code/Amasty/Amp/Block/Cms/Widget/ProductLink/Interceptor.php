<?php
namespace Amasty\Amp\Block\Cms\Widget\ProductLink;

/**
 * Interceptor class for @see \Amasty\Amp\Block\Cms\Widget\ProductLink
 */
class Interceptor extends \Amasty\Amp\Block\Cms\Widget\ProductLink implements \Magento\Framework\Interception\InterceptorInterface
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
