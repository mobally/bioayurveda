<?php
namespace Amasty\Amp\Block\Page\Html\Header;

/**
 * Interceptor class for @see \Amasty\Amp\Block\Page\Html\Header
 */
class Interceptor extends \Amasty\Amp\Block\Page\Html\Header implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Customer\Model\SessionFactory $sessionFactory, \Amasty\Amp\Model\ConfigProvider $configProvider, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $sessionFactory, $configProvider, $data);
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
