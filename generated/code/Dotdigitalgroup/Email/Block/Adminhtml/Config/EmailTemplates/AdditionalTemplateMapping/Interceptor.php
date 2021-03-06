<?php
namespace Dotdigitalgroup\Email\Block\Adminhtml\Config\EmailTemplates\AdditionalTemplateMapping;

/**
 * Interceptor class for @see \Dotdigitalgroup\Email\Block\Adminhtml\Config\EmailTemplates\AdditionalTemplateMapping
 */
class Interceptor extends \Dotdigitalgroup\Email\Block\Adminhtml\Config\EmailTemplates\AdditionalTemplateMapping implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Data\Form\Element\Factory $elementFactory, \Dotdigitalgroup\Email\Model\Config\Source\Carts\CampaignsFactory $campaignsFactory, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $elementFactory, $campaignsFactory, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function render(\Magento\Framework\Data\Form\Element\AbstractElement $element)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'render');
        if (!$pluginInfo) {
            return parent::render($element);
        } else {
            return $this->___callPlugins('render', func_get_args(), $pluginInfo);
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
