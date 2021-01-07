<?php
namespace WeltPixel\ReviewsWidget\Block\Widget\Review;

/**
 * Interceptor class for @see \WeltPixel\ReviewsWidget\Block\Widget\Review
 */
class Interceptor extends \WeltPixel\ReviewsWidget\Block\Widget\Review implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Url\EncoderInterface $urlEncoder, \Magento\Review\Helper\Data $reviewData, \Magento\Catalog\Api\ProductRepositoryInterface $productRepository, \Magento\Review\Model\RatingFactory $ratingFactory, \Magento\Framework\Message\ManagerInterface $messageManager, \Magento\Framework\App\Http\Context $httpContext, \Magento\Customer\Model\Url $customerUrl, \Magento\Framework\View\Element\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Review\Model\ResourceModel\Review\CollectionFactory $collectionFactory, array $data = [])
    {
        $this->___init();
        parent::__construct($urlEncoder, $reviewData, $productRepository, $ratingFactory, $messageManager, $httpContext, $customerUrl, $context, $registry, $collectionFactory, $data);
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
