<?php
namespace Magento\Catalog\Block\Adminhtml\Category\Widget\Chooser;

/**
 * Interceptor class for @see \Magento\Catalog\Block\Adminhtml\Category\Widget\Chooser
 */
class Interceptor extends \Magento\Catalog\Block\Adminhtml\Category\Widget\Chooser implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Catalog\Model\ResourceModel\Category\Tree $categoryTree, \Magento\Framework\Registry $registry, \Magento\Catalog\Model\CategoryFactory $categoryFactory, \Magento\Framework\Json\EncoderInterface $jsonEncoder, \Magento\Framework\DB\Helper $resourceHelper, \Magento\Backend\Model\Auth\Session $backendSession, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $categoryTree, $registry, $categoryFactory, $jsonEncoder, $resourceHelper, $backendSession, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function buildNodeName($node)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'buildNodeName');
        if (!$pluginInfo) {
            return parent::buildNodeName($node);
        } else {
            return $this->___callPlugins('buildNodeName', func_get_args(), $pluginInfo);
        }
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
