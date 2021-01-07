<?php
namespace Amasty\Xlanding\Block\Adminhtml\Page\Edit\Tab\Product;

/**
 * Interceptor class for @see \Amasty\Xlanding\Block\Adminhtml\Page\Edit\Tab\Product
 */
class Interceptor extends \Amasty\Xlanding\Block\Adminhtml\Page\Edit\Tab\Product implements \Magento\Framework\Interception\InterceptorInterface
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
