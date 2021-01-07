<?php
namespace WeltPixel\GoogleCards\Block\TwitterCards;

/**
 * Interceptor class for @see \WeltPixel\GoogleCards\Block\TwitterCards
 */
class Interceptor extends \WeltPixel\GoogleCards\Block\TwitterCards implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Block\Product\Context $productContext, \WeltPixel\GoogleCards\Helper\Data $helper, \Magento\Review\Model\Review\SummaryFactory $reviewSummaryFactory, \Magento\Review\Model\ResourceModel\Review\CollectionFactory $_reviewsFactory, \Magento\Theme\Block\Html\Header\Logo $logo, \Magento\Framework\View\Element\Template\Context $context, array $data = [])
    {
        $this->___init();
        parent::__construct($productContext, $helper, $reviewSummaryFactory, $_reviewsFactory, $logo, $context, $data);
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
