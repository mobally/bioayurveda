<?php
namespace Amasty\Base\Block\Adminhtml\Messages;

/**
 * Interceptor class for @see \Amasty\Base\Block\Adminhtml\Messages
 */
class Interceptor extends \Amasty\Base\Block\Adminhtml\Messages implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Amasty\Base\Model\AdminNotification\Messages $messageManager, \Magento\Framework\App\Request\Http $request, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $messageManager, $request, $data);
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
