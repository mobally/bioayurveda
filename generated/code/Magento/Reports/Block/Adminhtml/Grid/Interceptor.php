<?php
namespace Magento\Reports\Block\Adminhtml\Grid;

/**
 * Interceptor class for @see \Magento\Reports\Block\Adminhtml\Grid
 */
class Interceptor extends \Magento\Reports\Block\Adminhtml\Grid implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Backend\Helper\Data $backendHelper, array $data = [], ?\Magento\Framework\Url\DecoderInterface $urlDecoder = null, ?\Magento\Framework\Stdlib\Parameters $parameters = null)
    {
        $this->___init();
        parent::__construct($context, $backendHelper, $data, $urlDecoder, $parameters);
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
