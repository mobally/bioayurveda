<?php
namespace Magefan\Blog\Block\Adminhtml\System\Config\Form\UpdateInfo;

/**
 * Interceptor class for @see \Magefan\Blog\Block\Adminhtml\System\Config\Form\UpdateInfo
 */
class Interceptor extends \Magefan\Blog\Block\Adminhtml\System\Config\Form\UpdateInfo implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\HTTP\Client\Curl $curl, \Magento\Framework\Json\Helper\Data $jsonHelper, \Magefan\Blog\Model\AdminNotificationFeed $adminNotificationFeed, \Magento\Framework\Module\ModuleListInterface $moduleList, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $curl, $jsonHelper, $adminNotificationFeed, $moduleList, $data);
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
