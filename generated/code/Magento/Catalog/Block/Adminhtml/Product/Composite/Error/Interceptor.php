<?php
namespace Magento\Catalog\Block\Adminhtml\Product\Composite\Error;

/**
 * Interceptor class for @see \Magento\Catalog\Block\Adminhtml\Product\Composite\Error
 */
class Interceptor extends \Magento\Catalog\Block\Adminhtml\Product\Composite\Error implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Json\EncoderInterface $jsonEncoder, \Magento\Framework\Registry $registry, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $jsonEncoder, $registry, $data);
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
