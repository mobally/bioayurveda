<?php
namespace Magento\Sales\Block\Adminhtml\Order\View\Giftmessage;

/**
 * Interceptor class for @see \Magento\Sales\Block\Adminhtml\Order\View\Giftmessage
 */
class Interceptor extends \Magento\Sales\Block\Adminhtml\Order\View\Giftmessage implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\GiftMessage\Model\MessageFactory $messageFactory, \Magento\Framework\Registry $registry, \Magento\GiftMessage\Helper\Message $messageHelper, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $messageFactory, $registry, $messageHelper, $data);
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
