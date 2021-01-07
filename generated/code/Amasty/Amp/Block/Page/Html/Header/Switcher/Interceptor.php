<?php
namespace Amasty\Amp\Block\Page\Html\Header\Switcher;

/**
 * Interceptor class for @see \Amasty\Amp\Block\Page\Html\Header\Switcher
 */
class Interceptor extends \Amasty\Amp\Block\Page\Html\Header\Switcher implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Framework\Data\Helper\PostHelper $postDataHelper, \Magento\Framework\Url\EncoderInterface $encoder, array $data = [], ?\Magento\Framework\Url\Helper\Data $urlHelper = null)
    {
        $this->___init();
        parent::__construct($context, $postDataHelper, $encoder, $data, $urlHelper);
    }

    /**
     * {@inheritdoc}
     */
    public function getTargetStorePostData(\Magento\Store\Model\Store $store, $data = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTargetStorePostData');
        if (!$pluginInfo) {
            return parent::getTargetStorePostData($store, $data);
        } else {
            return $this->___callPlugins('getTargetStorePostData', func_get_args(), $pluginInfo);
        }
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
