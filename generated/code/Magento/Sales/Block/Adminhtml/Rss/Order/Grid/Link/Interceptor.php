<?php
namespace Magento\Sales\Block\Adminhtml\Rss\Order\Grid\Link;

/**
 * Interceptor class for @see \Magento\Sales\Block\Adminhtml\Rss\Order\Grid\Link
 */
class Interceptor extends \Magento\Sales\Block\Adminhtml\Rss\Order\Grid\Link implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Framework\App\Rss\UrlBuilderInterface $rssUrlBuilder, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $rssUrlBuilder, $data);
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
