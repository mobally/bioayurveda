<?php
namespace Amasty\Amp\Block\Product\Content\View\Review\Form;

/**
 * Interceptor class for @see \Amasty\Amp\Block\Product\Content\View\Review\Form
 */
class Interceptor extends \Amasty\Amp\Block\Product\Content\View\Review\Form implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Framework\Url\EncoderInterface $urlEncoder, \Magento\Review\Helper\Data $reviewData, \Magento\Catalog\Api\ProductRepositoryInterface $productRepository, \Magento\Review\Model\RatingFactory $ratingFactory, \Magento\Framework\Message\ManagerInterface $messageManager, \Magento\Framework\App\Http\Context $httpContext, \Magento\Customer\Model\Url $customerUrl, array $data = [], ?\Magento\Framework\Serialize\Serializer\Json $serializer = null)
    {
        $this->___init();
        parent::__construct($context, $urlEncoder, $reviewData, $productRepository, $ratingFactory, $messageManager, $httpContext, $customerUrl, $data, $serializer);
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
