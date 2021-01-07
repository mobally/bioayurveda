<?php
namespace Magento\Customer\Block\Account\SortLink;

/**
 * Interceptor class for @see \Magento\Customer\Block\Account\SortLink
 */
class Interceptor extends \Magento\Customer\Block\Account\SortLink implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Framework\App\DefaultPathInterface $defaultPath, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $defaultPath, $data);
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
