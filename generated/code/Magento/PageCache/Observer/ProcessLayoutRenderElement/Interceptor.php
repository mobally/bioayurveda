<?php
namespace Magento\PageCache\Observer\ProcessLayoutRenderElement;

/**
 * Interceptor class for @see \Magento\PageCache\Observer\ProcessLayoutRenderElement
 */
class Interceptor extends \Magento\PageCache\Observer\ProcessLayoutRenderElement implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\PageCache\Model\Config $config, ?\Magento\Framework\View\EntitySpecificHandlesList $entitySpecificHandlesList = null, ?\Magento\Framework\Serialize\Serializer\Json $jsonSerializer = null, ?\Magento\Framework\Serialize\Serializer\Base64Json $base64jsonSerializer = null)
    {
        $this->___init();
        parent::__construct($config, $entitySpecificHandlesList, $jsonSerializer, $base64jsonSerializer);
    }

    /**
     * {@inheritdoc}
     */
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        if (!$pluginInfo) {
            return parent::execute($observer);
        } else {
            return $this->___callPlugins('execute', func_get_args(), $pluginInfo);
        }
    }
}
