<?php
namespace Meetanshi\RestrictZip\Block\Catalog\Product\View;

/**
 * Interceptor class for @see \Meetanshi\RestrictZip\Block\Catalog\Product\View
 */
class Interceptor extends \Meetanshi\RestrictZip\Block\Catalog\Product\View implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Framework\ObjectManagerInterface $objectManager, \Meetanshi\RestrictZip\Model\RestrictZipFactory $restrictZip, \Magento\Framework\Registry $registry, \Meetanshi\RestrictZip\Helper\Data $helper, \Magento\Store\Model\StoreManagerInterface $storeManager, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $objectManager, $restrictZip, $registry, $helper, $storeManager, $data);
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
