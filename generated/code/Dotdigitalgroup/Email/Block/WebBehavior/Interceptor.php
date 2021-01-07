<?php
namespace Dotdigitalgroup\Email\Block\WebBehavior;

/**
 * Interceptor class for @see \Dotdigitalgroup\Email\Block\WebBehavior
 */
class Interceptor extends \Dotdigitalgroup\Email\Block\WebBehavior implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Dotdigitalgroup\Email\Helper\Data $helper, \Magento\Store\Model\StoreManagerInterface $storeManager, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $helper, $storeManager, $data);
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
