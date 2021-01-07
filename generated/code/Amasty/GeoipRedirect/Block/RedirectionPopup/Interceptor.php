<?php
namespace Amasty\GeoipRedirect\Block\RedirectionPopup;

/**
 * Interceptor class for @see \Amasty\GeoipRedirect\Block\RedirectionPopup
 */
class Interceptor extends \Amasty\GeoipRedirect\Block\RedirectionPopup implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Cms\Model\Template\FilterProvider $filterProvider, \Magento\Framework\Session\SessionManagerInterface $sessionManager, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $filterProvider, $sessionManager, $data);
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
