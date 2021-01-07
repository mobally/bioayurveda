<?php
namespace Amasty\Base\Block\Search;

/**
 * Interceptor class for @see \Amasty\Base\Block\Search
 */
class Interceptor extends \Amasty\Base\Block\Search implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Amasty\Base\Model\ModuleInfoProvider $moduleInfoProvider, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $moduleInfoProvider, $data);
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
