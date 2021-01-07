<?php
namespace Magento\Multishipping\Block\Checkout\AbstractMultishipping;

/**
 * Interceptor class for @see \Magento\Multishipping\Block\Checkout\AbstractMultishipping
 */
class Interceptor extends \Magento\Multishipping\Block\Checkout\AbstractMultishipping implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Multishipping\Model\Checkout\Type\Multishipping $multishipping, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $multishipping, $data);
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
