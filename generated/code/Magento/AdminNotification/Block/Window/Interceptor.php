<?php
namespace Magento\AdminNotification\Block\Window;

/**
 * Interceptor class for @see \Magento\AdminNotification\Block\Window
 */
class Interceptor extends \Magento\AdminNotification\Block\Window implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Backend\Model\Auth\Session $authSession, \Magento\AdminNotification\Model\ResourceModel\Inbox\Collection\Critical $criticalCollection, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $authSession, $criticalCollection, $data);
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
