<?php
namespace Magento\EncryptionKey\Block\Adminhtml\Crypt\Key\Edit;

/**
 * Interceptor class for @see \Magento\EncryptionKey\Block\Adminhtml\Crypt\Key\Edit
 */
class Interceptor extends \Magento\EncryptionKey\Block\Adminhtml\Crypt\Key\Edit implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Widget\Context $context, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $data);
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
