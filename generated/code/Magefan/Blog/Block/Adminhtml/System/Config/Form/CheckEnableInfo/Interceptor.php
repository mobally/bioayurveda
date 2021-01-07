<?php
namespace Magefan\Blog\Block\Adminhtml\System\Config\Form\CheckEnableInfo;

/**
 * Interceptor class for @see \Magefan\Blog\Block\Adminhtml\System\Config\Form\CheckEnableInfo
 */
class Interceptor extends \Magefan\Blog\Block\Adminhtml\System\Config\Form\CheckEnableInfo implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magefan\Blog\Model\Config $config, \Magento\Framework\Module\ModuleListInterface $moduleList, \Magento\Framework\App\ProductMetadataInterface $metadata, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $config, $moduleList, $metadata, $data);
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
