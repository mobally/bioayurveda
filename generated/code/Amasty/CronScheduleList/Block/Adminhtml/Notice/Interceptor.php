<?php
namespace Amasty\CronScheduleList\Block\Adminhtml\Notice;

/**
 * Interceptor class for @see \Amasty\CronScheduleList\Block\Adminhtml\Notice
 */
class Interceptor extends \Amasty\CronScheduleList\Block\Adminhtml\Notice implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Amasty\CronScheduleList\Model\ScheduleCollectionFactory $jobsCollection, \Amasty\CronScheduleList\Model\DateTimeBuilder $dateTimeBuilder, \Magento\Backend\Block\Template\Context $context, array $data = [])
    {
        $this->___init();
        parent::__construct($jobsCollection, $dateTimeBuilder, $context, $data);
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
