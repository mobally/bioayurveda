<?php
namespace Amasty\Amp\Block\Review\Block\Product\Review;

/**
 * Interceptor class for @see \Amasty\Amp\Block\Review\Block\Product\Review
 */
class Interceptor extends \Amasty\Amp\Block\Review\Block\Product\Review implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Review\Model\ResourceModel\Review\CollectionFactory $collectionFactory, \Magento\Framework\App\Http\Context $httpContext, \Magento\Review\Helper\Data $reviewData, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $collectionFactory, $httpContext, $reviewData, $data);
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
