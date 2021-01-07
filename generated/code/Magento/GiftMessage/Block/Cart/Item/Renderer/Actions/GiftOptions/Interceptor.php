<?php
namespace Magento\GiftMessage\Block\Cart\Item\Renderer\Actions\GiftOptions;

/**
 * Interceptor class for @see \Magento\GiftMessage\Block\Cart\Item\Renderer\Actions\GiftOptions
 */
class Interceptor extends \Magento\GiftMessage\Block\Cart\Item\Renderer\Actions\GiftOptions implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Json\Encoder $jsonEncoder, array $layoutProcessors = [], array $data = [])
    {
        $this->___init();
        parent::__construct($context, $jsonEncoder, $layoutProcessors, $data);
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
