<?php
namespace Amasty\Xlanding\Block\Adminhtml\Page\Edit\Tab\Product\Listing;

/**
 * Interceptor class for @see \Amasty\Xlanding\Block\Adminhtml\Page\Edit\Tab\Product\Listing
 */
class Interceptor extends \Amasty\Xlanding\Block\Adminhtml\Page\Edit\Tab\Product\Listing implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Backend\Helper\Data $backendHelper, \Magento\Catalog\Helper\Image $catalogImage, \Amasty\Xlanding\Model\Page\Product\AdminhtmlDataProvider $dataProvider, \Amasty\Xlanding\Block\Adminhtml\Widget\Attribute\Factory $attributeFactory, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $backendHelper, $catalogImage, $dataProvider, $attributeFactory, $data);
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
