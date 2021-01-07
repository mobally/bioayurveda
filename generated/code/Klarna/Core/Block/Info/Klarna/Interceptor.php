<?php
namespace Klarna\Core\Block\Info\Klarna;

/**
 * Interceptor class for @see \Klarna\Core\Block\Info\Klarna
 */
class Interceptor extends \Klarna\Core\Block\Info\Klarna implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Klarna\Core\Model\OrderRepository $orderRepository, \Klarna\Core\Model\MerchantPortal $merchantPortal, \Magento\Framework\Locale\Resolver $locale, \Magento\Framework\DataObjectFactory $dataObjectFactory, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $orderRepository, $merchantPortal, $locale, $dataObjectFactory, $data);
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
