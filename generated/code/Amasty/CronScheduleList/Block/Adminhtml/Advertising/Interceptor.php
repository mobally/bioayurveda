<?php
namespace Amasty\CronScheduleList\Block\Adminhtml\Advertising;

/**
 * Interceptor class for @see \Amasty\CronScheduleList\Block\Adminhtml\Advertising
 */
class Interceptor extends \Amasty\CronScheduleList\Block\Adminhtml\Advertising implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Module\Manager $moduleManager, \Magento\Backend\Block\Template\Context $context, \Amasty\Base\Helper\Module $moduleHelper, array $data = [])
    {
        $this->___init();
        parent::__construct($moduleManager, $context, $moduleHelper, $data);
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
