<?php
namespace Eighteentech\Seo\Block\Head;

/**
 * Interceptor class for @see \Eighteentech\Seo\Block\Head
 */
class Interceptor extends \Eighteentech\Seo\Block\Head implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Framework\ObjectManagerInterface $objectmanager, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Cms\Model\Page $page, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $objectmanager, $storeManager, $scopeConfig, $page, $data);
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
