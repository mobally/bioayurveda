<?php
namespace WeltPixel\Backend\Block\Adminhtml\ModulesVersion;

/**
 * Interceptor class for @see \WeltPixel\Backend\Block\Adminhtml\ModulesVersion
 */
class Interceptor extends \WeltPixel\Backend\Block\Adminhtml\ModulesVersion implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\DeploymentConfig $deploymentConfig, \Magento\Framework\Component\ComponentRegistrarInterface $componentRegistrar, \Magento\Framework\Filesystem\Directory\ReadFactory $readFactory, \Magento\Backend\Block\Template\Context $context, array $data = [])
    {
        $this->___init();
        parent::__construct($deploymentConfig, $componentRegistrar, $readFactory, $context, $data);
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
