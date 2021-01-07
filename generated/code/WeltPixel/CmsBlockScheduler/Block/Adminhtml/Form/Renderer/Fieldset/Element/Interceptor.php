<?php
namespace WeltPixel\CmsBlockScheduler\Block\Adminhtml\Form\Renderer\Fieldset\Element;

/**
 * Interceptor class for @see \WeltPixel\CmsBlockScheduler\Block\Adminhtml\Form\Renderer\Fieldset\Element
 */
class Interceptor extends \WeltPixel\CmsBlockScheduler\Block\Adminhtml\Form\Renderer\Fieldset\Element implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $data);
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
