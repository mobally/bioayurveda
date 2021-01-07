<?php
namespace Magento\Backend\Block\Cache\Grid\Column\Statuses;

/**
 * Interceptor class for @see \Magento\Backend\Block\Cache\Grid\Column\Statuses
 */
class Interceptor extends \Magento\Backend\Block\Cache\Grid\Column\Statuses implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\App\Cache\TypeListInterface $cacheTypeList, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $cacheTypeList, $data);
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
