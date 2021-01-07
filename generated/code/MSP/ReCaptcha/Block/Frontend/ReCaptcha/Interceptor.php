<?php
namespace MSP\ReCaptcha\Block\Frontend\ReCaptcha;

/**
 * Interceptor class for @see \MSP\ReCaptcha\Block\Frontend\ReCaptcha
 */
class Interceptor extends \MSP\ReCaptcha\Block\Frontend\ReCaptcha implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, $decoder, $encoder, \MSP\ReCaptcha\Model\LayoutSettings $layoutSettings, array $data = [], ?\MSP\ReCaptcha\Model\Config $config = null)
    {
        $this->___init();
        parent::__construct($context, $decoder, $encoder, $layoutSettings, $data, $config);
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
