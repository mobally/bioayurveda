<?php
namespace Magento\AdvancedSearch\Block\Adminhtml\Search\Grid;

/**
 * Interceptor class for @see \Magento\AdvancedSearch\Block\Adminhtml\Search\Grid
 */
class Interceptor extends \Magento\AdvancedSearch\Block\Adminhtml\Search\Grid implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Backend\Helper\Data $backendHelper, \Magento\AdvancedSearch\Model\Adminhtml\Search\Grid\Options $options, \Magento\Framework\Registry $registry, \Magento\Framework\Json\Helper\Data $jsonHelper, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $backendHelper, $options, $registry, $jsonHelper, $data);
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
