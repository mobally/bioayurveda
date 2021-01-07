<?php
namespace Amasty\Amp\Block\Search\Form;

/**
 * Interceptor class for @see \Amasty\Amp\Block\Search\Form
 */
class Interceptor extends \Amasty\Amp\Block\Search\Form implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Search\Helper\Data $searchHelper, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $searchHelper, $data);
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
