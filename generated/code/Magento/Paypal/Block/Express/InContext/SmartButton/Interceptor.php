<?php
namespace Magento\Paypal\Block\Express\InContext\SmartButton;

/**
 * Interceptor class for @see \Magento\Paypal\Block\Express\InContext\SmartButton
 */
class Interceptor extends \Magento\Paypal\Block\Express\InContext\SmartButton implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Paypal\Model\ConfigFactory $configFactory, \Magento\Framework\Serialize\SerializerInterface $serializer, \Magento\Paypal\Model\SmartButtonConfig $smartButtonConfig, \Magento\Framework\UrlInterface $urlBuilder, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $configFactory, $serializer, $smartButtonConfig, $urlBuilder, $data);
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
