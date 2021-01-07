<?php
namespace Amasty\Xlanding\Model\Sitemap;

/**
 * Interceptor class for @see \Amasty\Xlanding\Model\Sitemap
 */
class Interceptor extends \Amasty\Xlanding\Model\Sitemap implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Escaper $escaper, \Magento\Sitemap\Helper\Data $sitemapData, \Magento\Framework\Filesystem $filesystem, \Magento\Sitemap\Model\ResourceModel\Catalog\CategoryFactory $categoryFactory, \Magento\Sitemap\Model\ResourceModel\Catalog\ProductFactory $productFactory, \Magento\Sitemap\Model\ResourceModel\Cms\PageFactory $cmsFactory, \Amasty\Xlanding\Model\ResourceModel\PageFactory $amastyXlandingPageFactory, \Magento\Framework\Stdlib\DateTime\DateTime $modelDate, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\App\RequestInterface $request, \Magento\Framework\Stdlib\DateTime $dateTime, ?\Magento\Framework\Model\ResourceModel\AbstractResource $resource = null, ?\Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $escaper, $sitemapData, $filesystem, $categoryFactory, $productFactory, $cmsFactory, $amastyXlandingPageFactory, $modelDate, $storeManager, $request, $dateTime, $resource, $resourceCollection, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function collectSitemapItems()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'collectSitemapItems');
        if (!$pluginInfo) {
            return parent::collectSitemapItems();
        } else {
            return $this->___callPlugins('collectSitemapItems', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function generateXml()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'generateXml');
        if (!$pluginInfo) {
            return parent::generateXml();
        } else {
            return $this->___callPlugins('generateXml', func_get_args(), $pluginInfo);
        }
    }
}
