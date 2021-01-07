<?php
namespace Amasty\Amp\Block\Page;

/**
 * Interceptor class for @see \Amasty\Amp\Block\Page
 */
class Interceptor extends \Amasty\Amp\Block\Page implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Framework\Filesystem\DriverInterface $driver, \Magento\Framework\Module\Dir\Reader $moduleReader, \Magento\Theme\Model\Favicon\Favicon $favicon, \Magento\Framework\View\Page\Config $pageConfig, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $driver, $moduleReader, $favicon, $pageConfig, $data);
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
