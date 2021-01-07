<?php
namespace Magento\Rss\Block\Feeds;

/**
 * Interceptor class for @see \Magento\Rss\Block\Feeds
 */
class Interceptor extends \Magento\Rss\Block\Feeds implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Framework\App\Rss\RssManagerInterface $rssManager, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $rssManager, $data);
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
