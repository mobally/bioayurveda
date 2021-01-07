<?php
namespace Magento\Sales\Block\Order\Info\Buttons\Rss;

/**
 * Interceptor class for @see \Magento\Sales\Block\Order\Info\Buttons\Rss
 */
class Interceptor extends \Magento\Sales\Block\Order\Info\Buttons\Rss implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Sales\Model\OrderFactory $orderFactory, \Magento\Framework\App\Rss\UrlBuilderInterface $rssUrlBuilder, array $data = [], ?\Magento\Sales\Model\Rss\Signature $signature = null)
    {
        $this->___init();
        parent::__construct($context, $orderFactory, $rssUrlBuilder, $data, $signature);
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
