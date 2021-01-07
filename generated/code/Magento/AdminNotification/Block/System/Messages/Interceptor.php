<?php
namespace Magento\AdminNotification\Block\System\Messages;

/**
 * Interceptor class for @see \Magento\AdminNotification\Block\System\Messages
 */
class Interceptor extends \Magento\AdminNotification\Block\System\Messages implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\AdminNotification\Model\ResourceModel\System\Message\Collection\Synchronized $messages, \Magento\Framework\Json\Helper\Data $jsonHelper, array $data = [], ?\Magento\Framework\Serialize\Serializer\Json $serializer = null)
    {
        $this->___init();
        parent::__construct($context, $messages, $jsonHelper, $data, $serializer);
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
