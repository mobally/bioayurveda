<?php
namespace Magento\Backend\Block\Widget\Grid\Massaction;

/**
 * Interceptor class for @see \Magento\Backend\Block\Widget\Grid\Massaction
 */
class Interceptor extends \Magento\Backend\Block\Widget\Grid\Massaction implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Json\EncoderInterface $jsonEncoder, array $data = [], ?\Magento\Framework\AuthorizationInterface $authorization = null)
    {
        $this->___init();
        parent::__construct($context, $jsonEncoder, $data, $authorization);
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
