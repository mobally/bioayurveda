<?php
namespace Magento\Framework\View\Page\Config;

/**
 * Interceptor class for @see \Magento\Framework\View\Page\Config
 */
class Interceptor extends \Magento\Framework\View\Page\Config implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Asset\Repository $assetRepo, \Magento\Framework\View\Asset\GroupedCollection $pageAssets, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Framework\View\Page\FaviconInterface $favicon, \Magento\Framework\View\Page\Title $title, \Magento\Framework\Locale\ResolverInterface $localeResolver, $isIncludesAvailable = true, ?\Magento\Framework\Escaper $escaper = null)
    {
        $this->___init();
        parent::__construct($assetRepo, $pageAssets, $scopeConfig, $favicon, $title, $localeResolver, $isIncludesAvailable, $escaper);
    }

    /**
     * {@inheritdoc}
     */
    public function setPageLayout($handle)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setPageLayout');
        if (!$pluginInfo) {
            return parent::setPageLayout($handle);
        } else {
            return $this->___callPlugins('setPageLayout', func_get_args(), $pluginInfo);
        }
    }
}
