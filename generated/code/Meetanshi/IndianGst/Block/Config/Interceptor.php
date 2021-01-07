<?php
namespace Meetanshi\IndianGst\Block\Config;

/**
 * Interceptor class for @see \Meetanshi\IndianGst\Block\Config
 */
class Interceptor extends \Meetanshi\IndianGst\Block\Config implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Meetanshi\IndianGst\Model\ConfigProvider $configProvider, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $configProvider, $data);
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
