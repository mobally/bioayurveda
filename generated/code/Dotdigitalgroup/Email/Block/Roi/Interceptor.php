<?php
namespace Dotdigitalgroup\Email\Block\Roi;

/**
 * Interceptor class for @see \Dotdigitalgroup\Email\Block\Roi
 */
class Interceptor extends \Dotdigitalgroup\Email\Block\Roi implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Dotdigitalgroup\Email\Helper\Data $helper, \Magento\Checkout\Model\Session $session, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $helper, $session, $data);
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
