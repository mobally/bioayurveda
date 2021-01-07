<?php
namespace Amasty\Xlanding\Block\Adminhtml\Page\Edit\Tab\Meta;

/**
 * Interceptor class for @see \Amasty\Xlanding\Block\Adminhtml\Page\Edit\Tab\Meta
 */
class Interceptor extends \Amasty\Xlanding\Block\Adminhtml\Page\Edit\Tab\Meta implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Config\Model\Config\Source\Design\Robots $robots, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Magento\Store\Model\System\Store $systemStore, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $robots, $registry, $formFactory, $systemStore, $data);
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
