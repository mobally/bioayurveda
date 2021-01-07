<?php
namespace WeltPixel\SearchAutoComplete\Block\SearchAutoComplete;

/**
 * Interceptor class for @see \WeltPixel\SearchAutoComplete\Block\SearchAutoComplete
 */
class Interceptor extends \WeltPixel\SearchAutoComplete\Block\SearchAutoComplete implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \WeltPixel\SearchAutoComplete\Model\Autocomplete\SearchDataProvider $dataProvider, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $dataProvider, $data);
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
