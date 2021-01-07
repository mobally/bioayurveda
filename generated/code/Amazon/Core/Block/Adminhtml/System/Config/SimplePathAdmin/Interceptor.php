<?php
namespace Amazon\Core\Block\Adminhtml\System\Config\SimplePathAdmin;

/**
 * Interceptor class for @see \Amazon\Core\Block\Adminhtml\System\Config\SimplePathAdmin
 */
class Interceptor extends \Amazon\Core\Block\Adminhtml\System\Config\SimplePathAdmin implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Amazon\Core\Model\Config\SimplePath $simplePath, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $simplePath, $data);
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
