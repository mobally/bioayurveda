<?php
namespace WeltPixel\GoogleCards\Block\Breadcrumbs;

/**
 * Interceptor class for @see \WeltPixel\GoogleCards\Block\Breadcrumbs
 */
class Interceptor extends \WeltPixel\GoogleCards\Block\Breadcrumbs implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Catalog\Model\Session $catalogSession, \Magento\Catalog\Helper\Data $catalogHelper, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $catalogSession, $catalogHelper, $data);
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
