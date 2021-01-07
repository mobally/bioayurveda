<?php
namespace Amasty\Xlanding\Block\Adminhtml\Widget\Select\SortOrder;

/**
 * Interceptor class for @see \Amasty\Xlanding\Block\Adminhtml\Widget\Select\SortOrder
 */
class Interceptor extends \Amasty\Xlanding\Block\Adminhtml\Widget\Select\SortOrder implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Amasty\Xlanding\Model\Page\Product\Sorting $sorting, \Amasty\Xlanding\Model\Page\Product\AdminhtmlDataProvider $dataProvider, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $sorting, $dataProvider, $data);
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
