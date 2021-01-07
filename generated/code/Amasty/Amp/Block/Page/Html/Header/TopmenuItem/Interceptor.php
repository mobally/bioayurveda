<?php
namespace Amasty\Amp\Block\Page\Html\Header\TopmenuItem;

/**
 * Interceptor class for @see \Amasty\Amp\Block\Page\Html\Header\TopmenuItem
 */
class Interceptor extends \Amasty\Amp\Block\Page\Html\Header\TopmenuItem implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Amasty\Amp\Model\UrlConfigProvider $urlConfigProvider, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $urlConfigProvider, $data);
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
