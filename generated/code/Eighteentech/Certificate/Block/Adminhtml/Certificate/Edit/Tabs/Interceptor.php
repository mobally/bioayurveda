<?php
namespace Eighteentech\Certificate\Block\Adminhtml\Certificate\Edit\Tabs;

/**
 * Interceptor class for @see \Eighteentech\Certificate\Block\Adminhtml\Certificate\Edit\Tabs
 */
class Interceptor extends \Eighteentech\Certificate\Block\Adminhtml\Certificate\Edit\Tabs implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Json\EncoderInterface $jsonEncoder, \Magento\Backend\Model\Auth\Session $authSession, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $jsonEncoder, $authSession, $data);
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
