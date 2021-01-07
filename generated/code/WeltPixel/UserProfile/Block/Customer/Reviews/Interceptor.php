<?php
namespace WeltPixel\UserProfile\Block\Customer\Reviews;

/**
 * Interceptor class for @see \WeltPixel\UserProfile\Block\Customer\Reviews
 */
class Interceptor extends \WeltPixel\UserProfile\Block\Customer\Reviews implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Review\Model\ResourceModel\Review\Product\CollectionFactory $collectionFactory, \WeltPixel\UserProfile\Helper\Renderer $profileRendererHelper, \Magento\Catalog\Block\Product\ImageFactory $imageFactory, \Magento\Catalog\Api\ProductRepositoryInterface $productRepository, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $collectionFactory, $profileRendererHelper, $imageFactory, $productRepository, $data);
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
