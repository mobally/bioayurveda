<?php
namespace Magento\User\Block\Role\Edit;

/**
 * Interceptor class for @see \Magento\User\Block\Role\Edit
 */
class Interceptor extends \Magento\User\Block\Role\Edit implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Json\EncoderInterface $jsonEncoder, \Magento\Backend\Model\Auth\Session $authSession, \Magento\Framework\Registry $registry, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $jsonEncoder, $authSession, $registry, $data);
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
