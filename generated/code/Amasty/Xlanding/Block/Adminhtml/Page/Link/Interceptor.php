<?php
namespace Amasty\Xlanding\Block\Adminhtml\Page\Link;

/**
 * Interceptor class for @see \Amasty\Xlanding\Block\Adminhtml\Page\Link
 */
class Interceptor extends \Amasty\Xlanding\Block\Adminhtml\Page\Link implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Widget\Context $context, \Magento\Framework\Registry $registry, \Amasty\Xlanding\Api\PageRepositoryInterface $pageRepository, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $pageRepository, $data);
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
