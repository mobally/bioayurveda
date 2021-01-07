<?php
namespace Meetanshi\IndianGst\Model\Bundle\Block\Sales\Invoice\Items\Renderer;

/**
 * Interceptor class for @see \Meetanshi\IndianGst\Model\Bundle\Block\Sales\Invoice\Items\Renderer
 */
class Interceptor extends \Meetanshi\IndianGst\Model\Bundle\Block\Sales\Invoice\Items\Renderer implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Framework\Stdlib\StringUtils $string, \Magento\Catalog\Model\Product\OptionFactory $productOptionFactory, array $data = [], ?\Magento\Framework\Serialize\Serializer\Json $serializer = null)
    {
        $this->___init();
        parent::__construct($context, $string, $productOptionFactory, $data, $serializer);
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
