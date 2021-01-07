<?php
namespace Magento\GoogleOptimizer\Block\Adminhtml\Catalog\Category\Edit\Googleoptimizer;

/**
 * Interceptor class for @see \Magento\GoogleOptimizer\Block\Adminhtml\Catalog\Category\Edit\Googleoptimizer
 */
class Interceptor extends \Magento\GoogleOptimizer\Block\Adminhtml\Catalog\Category\Edit\Googleoptimizer implements \Magento\Framework\Interception\InterceptorInterface
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
