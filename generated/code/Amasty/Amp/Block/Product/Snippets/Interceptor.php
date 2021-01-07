<?php
namespace Amasty\Amp\Block\Product\Snippets;

/**
 * Interceptor class for @see \Amasty\Amp\Block\Product\Snippets
 */
class Interceptor extends \Amasty\Amp\Block\Product\Snippets implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Theme\Model\Favicon\Favicon $favicon, \Amasty\Amp\Block\Page\Html\Header\Logo $logo, \Magento\Theme\Block\Html\Title $title, \Magento\Catalog\Helper\Data $catalogHelper, \Magento\Review\Block\Product\ReviewRenderer $reviewRenderer, \Magento\Review\Model\ReviewFactory $reviewFactory, \Amasty\Amp\Model\Product\Review\ReviewSummary $reviewSummary, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $favicon, $logo, $title, $catalogHelper, $reviewRenderer, $reviewFactory, $reviewSummary, $data);
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
