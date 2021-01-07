<?php
namespace Magento\Catalog\Block\Adminhtml\Product\Edit\Tab\Options\Type\Select;

/**
 * Interceptor class for @see \Magento\Catalog\Block\Adminhtml\Product\Edit\Tab\Options\Type\Select
 */
class Interceptor extends \Magento\Catalog\Block\Adminhtml\Product\Edit\Tab\Options\Type\Select implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Catalog\Model\Config\Source\Product\Options\Price $optionPrice, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $optionPrice, $data);
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
