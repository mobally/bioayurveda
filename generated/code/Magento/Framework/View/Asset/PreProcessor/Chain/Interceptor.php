<?php
namespace Magento\Framework\View\Asset\PreProcessor\Chain;

/**
 * Interceptor class for @see \Magento\Framework\View\Asset\PreProcessor\Chain
 */
class Interceptor extends \Magento\Framework\View\Asset\PreProcessor\Chain implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Asset\LocalInterface $asset, $origContent, $origContentType, $origAssetPath, array $compatibleTypes = [])
    {
        $this->___init();
        parent::__construct($asset, $origContent, $origContentType, $origAssetPath, $compatibleTypes);
    }

    /**
     * {@inheritdoc}
     */
    public function getContent()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getContent');
        if (!$pluginInfo) {
            return parent::getContent();
        } else {
            return $this->___callPlugins('getContent', func_get_args(), $pluginInfo);
        }
    }
}
