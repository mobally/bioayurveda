<?php
namespace Magento\Theme\Block\Adminhtml\System\Design\Theme\Edit\Tab\Js;

/**
 * Interceptor class for @see \Magento\Theme\Block\Adminhtml\System\Design\Theme\Edit\Tab\Js
 */
class Interceptor extends \Magento\Theme\Block\Adminhtml\System\Design\Theme\Edit\Tab\Js implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Magento\Framework\ObjectManagerInterface $objectManager, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $objectManager, $data);
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
