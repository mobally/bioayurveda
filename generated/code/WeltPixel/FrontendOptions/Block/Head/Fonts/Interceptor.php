<?php
namespace WeltPixel\FrontendOptions\Block\Head\Fonts;

/**
 * Interceptor class for @see \WeltPixel\FrontendOptions\Block\Head\Fonts
 */
class Interceptor extends \WeltPixel\FrontendOptions\Block\Head\Fonts implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\WeltPixel\FrontendOptions\Helper\Fonts $_fontsHelper, \WeltPixel\FrontendOptions\Helper\Data $_dataHelper, \Magento\Framework\View\Element\Template\Context $context, array $data = [])
    {
        $this->___init();
        parent::__construct($_fontsHelper, $_dataHelper, $context, $data);
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
