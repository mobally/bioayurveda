<?php
namespace Amasty\Amp\Block\Product\Content\View\ReviewRenderer;

/**
 * Interceptor class for @see \Amasty\Amp\Block\Product\Content\View\ReviewRenderer
 */
class Interceptor extends \Amasty\Amp\Block\Product\Content\View\ReviewRenderer implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Review\Model\ReviewFactory $reviewFactory, array $data = [], ?\Magento\Review\Model\ReviewSummaryFactory $reviewSummaryFactory = null)
    {
        $this->___init();
        parent::__construct($context, $reviewFactory, $data, $reviewSummaryFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function getReviewsSummaryHtml(\Magento\Catalog\Model\Product $product, $templateType = 'default', $displayIfNoReviews = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getReviewsSummaryHtml');
        if (!$pluginInfo) {
            return parent::getReviewsSummaryHtml($product, $templateType, $displayIfNoReviews);
        } else {
            return $this->___callPlugins('getReviewsSummaryHtml', func_get_args(), $pluginInfo);
        }
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
